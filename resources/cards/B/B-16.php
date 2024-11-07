<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tornado')]
#[Concept('Catastrophe')]
#[Prerequisites(['This card can be played only if Winter is in play.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="165" >

<x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
<x-card.normalrule>If the Place card in play is a Venue or Facility card, discard .</x-card.normalrule>
<x-card.normalrule>Discard all Mobster and Bystander cards in play.</x-card.normalrule>
<x-card.normalrule>Discard all Item cards in play.</x-card.normalrule>

</x-card.cardrule>
HTML;
    }
};
