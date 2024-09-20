<?php

namespace App\Console\Commands;

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
    protected $signature = 'card:make {card-number} {type} {name}';

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
        $card_type = $this->argument('type');

        $card_number_pieces = \explode('-', $card_number);
        $set = $card_number_pieces[0];

        if (\count($card_number_pieces) === 1) {
            // find the next available number in the set

            $existing_files = $filesystem->listContents($set)
                ->filter(function (StorageAttributes $attributes) {
                    return $attributes->isFile();
                })
                ->sortByPath()
                ->map(function (StorageAttributes $attributes) use ($set) {
                    if (\preg_match("/{$set}\\/{$set}-(\\d+)\\.blade\\.php/", $attributes->path(), $matches) === 1) {
                        return $matches[1];
                    }
                })
                ->toArray();

            $max = \max(\array_map(fn ($value): int => (int) $value, $existing_files)) ?? 0;

            $card_number = $set . '-' . \str_pad($max + 1, 2, '0', \STR_PAD_LEFT);
        }

        $content_generator = function () use ($card_type, $card_name) {
            yield "@push('background')";
            yield "{{ view('{$card_type}.background') }}";
            yield '<x-card.flavortext>';

            foreach (self::_askMultiline('Flavor text:') as $line) {
                yield "<x-card.flavortext.line>{$line}</x-card.flavortext.line>";
            }

            yield '</x-card.flavortext>';
            yield '<x-card.image-credit>';
            yield 'Image by USER_NAME on SERVICE';
            yield '</x-card.image-credit>';
            yield '@endpush';

            yield <<<HTML
<x-card :\$cardNumber card-name="{$card_name}">
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />

<x-card.staticon type="{$card_type}" :dx="1" />
<text y="500" filter="url(#solid)">
HTML;

            foreach (self::_askMultiline('Secondary text:') as $line) {
                yield "<x-card.smallrule>{$line}</x-card.smallrule>";
            }

            foreach (self::_askMultiline('Primary text:') as $line) {
                yield "<x-card.normalrule>{$line}</x-card.normalrule>";
            }

            yield <<<'HTML'
</text>
            yield <<<'HTML'
</x-slot:text>
</x-card>
HTML;
        };

        $filesystem->put("{$set}/{$card_number}.blade.php", \implode("\n", \iterator_to_array($content_generator())));

        $this->info("{$card_number} {$card_name} created.");
    }
}
