<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Storage;

class ListDeck extends Command implements PromptsForMissingInput
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Returns the info on a particular deck, including a listing of the cards.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deck:list {id}';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $filesystem = Storage::disk('cards');
        $total_count = 0;

        // Determine the list of cards to count.

        $deck = $this->argument('id');
        $list = \config("decks.{$deck}.cards");

        foreach ($list as $card_number => $count) {
            $total_count += $count;
            $spec = \App\Card\make($card_number);
            $this->info(\sprintf('%5u %-7s %s', $count, $card_number, $spec->name()));
        }

        $this->info(\sprintf('%5u TOTAL', $total_count));
    }
}
