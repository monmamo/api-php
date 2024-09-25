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

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $filesystem = Storage::disk('cards');

        $card_number = $this->argument('card-number');
        $card_name = $this->argument('name');

        $concept_generator = function () {
foreach($this->option('concepts') as $command_line_concept) yield $command_line_concept;

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
array_push(        $concepts,...$concept_generator());

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

        $content_generator = function () use ($concepts, $card_name): \Traversable {
            $format_value = fn($key, $value) => \sprintf("'%s' => %s,", $key, \json_encode($value));

            yield '<?php';
            yield 'return [';
            yield $format_value('name', $card_name);
            yield '';
            yield $format_value('concepts', $concepts);
            yield '';
            yield $format_value('image-prompt', null);
            yield '';
            yield $format_value('image-credit', 'Image by USER_NAME on SERVICE');
            yield '';

            if (!$this->option('nocontent')) {
                yield $format_value('flavor-text', \iterator_to_array(self::_askMultiline('Flavor text:')));
            }
            yield "'background' => view('{$concepts[0]}.background'),";

            yield "'content' => <<<HTML";

            if (!$this->option('nocontent')) {
                yield '<image x="0" y="0" class="hero" href="@local(TODO.png)"  />';

                $secondary_lines = \iterator_to_array(self::_askMultiline('Secondary text:'));
                $primary_lines = \iterator_to_array(self::_askMultiline('Primary text:'));
                $height = \count($secondary_lines) * 25 + \count($primary_lines) * 35;

                yield "<x-card.cardrule height=\"{$height}\" >";

                foreach ($secondary_lines as $line) {
                    yield "<x-card.smallrule>{$line}</x-card.smallrule>";
                }

                foreach ($primary_lines as $line) {
                    yield "<x-card.normalrule>{$line}</x-card.normalrule>";
                }

                if ($height === 0)
                    yield "<x-card.normalrule>TODO</x-card.normalrule>";

                yield '</x-card.cardrule>';
            }
            yield 'HTML';
            yield '];';
        };

        $filesystem->put("{$set}/{$card_number}.php", \implode("\n", \iterator_to_array($content_generator())));

        $this->info("{$card_number} {$card_name} created.");
    }
}
