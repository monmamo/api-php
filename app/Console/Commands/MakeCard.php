<?php

namespace App\Console\Commands;

use App\CardNumber;
use App\CardSpec;
use App\Concept;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;

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
    protected $signature = 'card:make {card-number} {names*}
    {--C|nocontent}
    {--c|concepts=*}
    {--I|noimagecredit}
    {--F|noflavor}
    {--S|nosecondary}
    {--P|noprimary}
    {--j|json : Take JSON input.}';

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
        $card_number = CardNumber::make($this->argument('card-number'));

        $concepts = $this->option('concepts');

        if (!$this->option('nocontent')) {
            $all_concepts = \collect(Concept::all());

            do {
                $input = \Laravel\Prompts\suggest(
                    'Additional Concept',
                    fn ($value) => $all_concepts->filter(
                        fn ($name) => \str_starts_with(\strtolower($name), \strtolower($value)),
                    ),
                );

                if (!empty($input)) {
                    $concepts[] = $input;
                }
            } while (!empty($input));
        }

        foreach ($this->argument('names') as $card_name) {
            $this->info("Creating card {$card_number} {$card_name}.");

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
                    image_credit: $this->option('noimagecredit') ? null : \Laravel\Prompts\text('Image credit'),
                    flavor_text: $this->option('noflavor') ? [] : \iterator_to_array(self::_askMultiline('Flavor text')),
                    secondary_lines: \iterator_to_array(self::_askMultiline('Secondary text')),
                    primary_lines: $primary_lines = \iterator_to_array(self::_askMultiline('Primary text')),
                );

            $this->generateOne($spec);

            $card_number = $card_number->makeNext();
        }
    }
}
