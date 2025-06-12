<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// Upkeep phase: Draw a card. You may take another Draw phase.

return new
#[Title('Minion')]
#[Concept('Mobster')]
#[Concept('DamageCapacity', '10')]
#[Concept('Size', '3')]
#[Concept('Speed', '3')]
#[Concept('Cost', 2)]
#[Concept('Training', 2)]
#[IsIncomplete]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.flavortext>Soem people call them "fans."</x-card.flavortext>

            <x-card.cardrule >
<x-card.ruleline class="smallrule">You must already have a Master or Boss on the Battlefield</x-card.ruleline>
<x-card.ruleline class="smallrule">to put this card on the Battlefield.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
