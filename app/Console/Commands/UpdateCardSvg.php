<?php

namespace App\Console\Commands;

use App\Enums\CardSet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Blade;

class UpdateCardSvg extends Command
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regenerate all card SVG files.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'card:update-svg';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $count = 0;
        $card_width = \config('card-design.width');

        foreach (CardSet::cases() as $set) {
            echo $set->value;

            foreach (CardSet::from($set->value)->cards() as $card_spec) {
                $card_number = $card_spec->cardNumber();

                try {
                    $path = \resource_path('images/cards/' . $card_number . '.svg');
                    \file_put_contents($path, Blade::render("<x-card cardNumber=\"{$card_number}\" width=\"{$card_width}\" />"));

                    echo '.';
                    ++$count;
                } catch (\Throwable $e) {
                    $this->error($card_number . ': ' . $e->getMessage());
                    continue;
                }
            }
        }

        $this->info($count . ' SVG files regenerated.');
    }
}
