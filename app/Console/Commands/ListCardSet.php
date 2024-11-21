<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\StorageAttributes;

class ListCardSet extends Command implements PromptsForMissingInput
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Returns the info on a particular card set, including a listing of the cards.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cardset:list {id}';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Determine the list of cards to count.

        $code = $this->argument('id');

        $count = 0;
        foreach (\App\Enums\CardSet::from($code)->cards() as $card_spec) {
            assert($card_spec instanceof \App\Contracts\Card\CardComponents);
            $this->info(\sprintf('%-7s %-30s %s', $card_spec->cardNumber(),$card_spec->name(),$card_spec->concepts()[0]->title()));
            $count++;
        }


        $this->info(\sprintf('%u cards', $count));
    }
}
