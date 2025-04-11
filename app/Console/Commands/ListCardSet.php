<?php

namespace App\Console\Commands;

use App\Contracts\Card\CardComponents;
use App\Enums\CardSet;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;

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

        foreach (CardSet::from($code)->cards() as $card_spec) {
            \assert($card_spec instanceof CardComponents);
            $this->info(\sprintf('%-7s %-30s %s', $card_spec->cardNumber(), $card_spec->name(), $card_spec->concepts()[0]->title()));
            ++$count;
        }

        $this->info(\sprintf('%u cards', $count));
    }
}
