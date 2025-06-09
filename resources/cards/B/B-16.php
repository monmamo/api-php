<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tornado')]
#[Concept('Catastrophe')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule  >
<x-card.ruleline>This card can be played only if Winter is in play.</x-card.ruleline>
<x-card.ruleline>Each player discards 3 cards from the top of his Library.</x-card.ruleline>
<x-card.ruleline>If the Place card in play is a Venue or Facility card, discard .</x-card.ruleline>
<x-card.ruleline>Discard all Mobster and Bystander cards in play.</x-card.ruleline>
<x-card.ruleline>Discard all Item cards in play.</x-card.ruleline>

</x-card.cardrule>
HTML;
    }
};
