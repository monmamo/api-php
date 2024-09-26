<?php

namespace App\Console\Commands;

use App\CardSpec;
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
    protected $signature = 'card:make {card-number} {name} {--C|nocontent} {--c|concepts=*} {--j|json}';

    /**
     * @group unary
     */
    private function _askMultiline(string $prompt): \Traversable
    {
        $input = \Laravel\Prompts\textarea($prompt);

        $line = \str_replace('","', "\n", $input);

        foreach (\explode("\n", $line) as $subline) {
            $subline = \trim($subline, " \n\r\t\v\x00\"'");

            if (!empty($subline)) {
                yield $subline;
            }
        }
    }

    private function generateOne(CardSpec $spec): void
    {
        $spec->put();
        $card_number = $spec->cardNumber();
        $card_name = $spec->name();
        $this->info("{$card_number} {$card_name} created.");
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

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $filesystem = Storage::disk('cards');

        $card_number = $this->argument('card-number');
        $card_name = $this->argument('name');

        $concepts = $this->option('concepts');

        if (!$this->option('nocontent')) {
            $all_concepts = \collect(Concept::all());

            do {
                $input = \Laravel\Prompts\suggest(
                    'Concept',
                    fn ($value) => $all_concepts->filter(
                        fn ($name) => \str_starts_with(\strtolower($name), \strtolower($value)),
                    ),
                );

                if (!empty($input)) {
                    $concepts[] = $input;
                }
            } while (!empty($input));
        }

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
                    return 0;
                })
                ->toArray();

            $existing_files[] = 0; //ensure there is at least one element in the array

            $card_number = $set . '-' . \str_pad(\max($existing_files) + 1, 2, '0', \STR_PAD_LEFT);
        }

        $spec = $this->option('nocontent') ? new CardSpec(
            card_name: $card_name,
            card_number: $card_number,
            concepts: $concepts,
            no_content: true,
        )
            : new CardSpec(
                card_name: $card_name,
                card_number: $card_number,
                concepts: $concepts,
                image_credit: \Laravel\Prompts\text('Image credit'),
                flavor_text: \iterator_to_array(self::_askMultiline('Flavor text')),
                secondary_lines: \iterator_to_array(self::_askMultiline('Secondary text')),
                primary_lines: $primary_lines = \iterator_to_array(self::_askMultiline('Primary text')),
            );

        $this->generateOne($spec);
    }
}
