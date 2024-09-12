<?php

namespace App\Console\Commands;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Console\Command;

class MakeCard extends Command implements \Illuminate\Contracts\Console\PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'card:make {card-number} {type} {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

    private static function _parseLineInput(string $line): \Traversable
    {
            $line = str_replace('","', '"|"', $line);
            foreach (explode('|', $line) as $subline) {
                yield trim($subline, " \n\r\t\v\x00\"'");
            }
    }

    private function _askMultiline(string $prompt): \Traversable
    {
        $this->info($prompt);
        do {
            $input = $this->ask('');
            if ($input)
                foreach (self::_parseLineInput($input) as $line)
                    yield  $line;
        } while (!is_null($input));
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filesystem = \Illuminate\Support\Facades\Storage::disk('cards');

        $card_number = $this->argument('card-number');
        $card_name = $this->argument('name');
        $card_type = $this->argument('type');

        $card_number_pieces =  explode('-', $card_number);
        $set = $card_number_pieces[0];
        if (count($card_number_pieces) === 1) {
            // find the next available number in the set

            $existing_files =     $filesystem->listContents($set)
                ->filter(function (\League\Flysystem\StorageAttributes $attributes) {
                    return $attributes->isFile();
                })
                ->sortByPath()
                ->map(function (\League\Flysystem\StorageAttributes $attributes) use ($set) {

                    if (preg_match("/$set\/$set-(\d+)\.blade\.php/", $attributes->path(), $matches) === 1) {
                        return $matches[1];
                    };
                    return null;
                })
                ->toArray();


            $max = max(array_map(fn($value): int => (int)$value, $existing_files)) ?? 0;

            $card_number = $set . '-' . str_pad($max + 1, 2, '0', STR_PAD_LEFT);
        }

        $content = '';

        $content .= "@push('flavor-text')\n";
        foreach (self::_askMultiline('Flavor text:') as $line)
            $content .= "<x-card.flavor-text-line>$line</x-card.flavor-text-line>\n";
        $content .= "@endpush\n\n";

        $small_text = iterator_to_array(self::_askMultiline('Secondary text:'));
        $small_text_imploded = implode("\n", $small_text);

        $body_text = iterator_to_array(self::_askMultiline('Primary text:'));
        $body_text_imploded = implode("\n", $body_text);
// echo json_encode($body_text_imploded);exit;//TEMP

        $content .= <<<HTML
@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card.$card_type :\$cardNumber card-name="$card_name">
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    <x-card.rulebox>
    <x-slot:small>
$small_text_imploded
    </x-slot:small>
        <x-slot:normal>
$body_text_imploded
    </x-slot:normal>
    </x-card.rulebox>

</x-card.$card_type>
HTML;

        $filesystem->put("$set/$card_number.blade.php", $content);

        $this->info("$card_number $card_name created.");
    }
}
