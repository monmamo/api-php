<?php

namespace App\Console\Commands;

use App\Concept;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\StorageAttributes;

class MakeCard extends Command implements PromptsForMissingInput
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'card:make {card-number} {name} {--C|nocontent} {--c|concepts=*}';

    /**
     * @group unary
     */
    private function _askMultiline(string $prompt): \Traversable
    {
        $this->info($prompt);

        do {
            $input = $this->ask('');

            if ($input) {
                foreach (self::_parseLineInput($input) as $line) {
                    yield $line;
                }
            }
        } while (!\is_null($input));
    }

    /**
     * @group unary
     */
    private static function _parseLineInput(string $line): \Traversable
    {
        $line = \str_replace('","', '"|"', $line);

        foreach (\explode('|', $line) as $subline) {
            yield \trim($subline, " \n\r\t\v\x00\"'");
        }
    }

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array
     */
    protected function promptForMissingArgumentsUsing()
    {
        return [
            'card-number' => 'Card number of new card:',
        ];
    }

    private function generateOne(\App\CardSpec $spec): void
    {
        $spec->put();
        $card_number = $spec->cardNumber();
        $card_name = $spec->name();
        $this->info("{$card_number} {$card_name} created.");
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $filesystem = Storage::disk('cards');

        $card_number = $this->argument('card-number');
        $card_name = $this->argument('name');

        $concept_generator = function () {
            foreach ($this->option('concepts') as $command_line_concept) yield $command_line_concept;

            $all_concepts = Concept::all();

            do {
                $input = $this->anticipate('Concept', $all_concepts);

                if ($input) {
                    yield $input;
                }
            } while (!\is_null($input));
        };
        $concepts = $this->option('concepts');
        if (!$this->option('nocontent'))
            array_push($concepts, ...$concept_generator());

        $card_number_pieces = \explode('-', $card_number);
        $set = $card_number_pieces[0];

        if (\count($card_number_pieces) === 1) {
            // find the next available number in the set

            $existing_files = $filesystem->listContents($set)
                ->filter(function (StorageAttributes $attributes) {
                    return $attributes->isFile();
                })
                ->map(function (StorageAttributes $attributes) use ($set): int {
                    if (\preg_match("/{$set}\\/{$set}-(\\d+)\\.php/", $attributes->path(), $matches) === 1) {
                        return (int) $matches[1];
                    }
                })
                ->toArray();

            $existing_files[] = 0; //ensure there is at least one element in the array

            $card_number = $set . '-' . \str_pad(\max($existing_files) + 1, 2, '0', \STR_PAD_LEFT);
        }

        $spec = new \App\CardSpec(
            card_name: $card_name,
            card_number: $card_number,
            concepts: $concepts,
            image_credit: $this->ask('Image credit:'),
            flavor_text: \iterator_to_array(self::_askMultiline('Flavor text:')),
            no_content: $this->option('nocontent'),
            secondary_lines: \iterator_to_array(self::_askMultiline('Secondary text:')),
            primary_lines: $primary_lines = \iterator_to_array(self::_askMultiline('Primary text:'))
        );

        $this->generateOne($spec);
    }
}
