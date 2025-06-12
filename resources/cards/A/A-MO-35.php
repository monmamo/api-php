<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Soldier')]
#[Concept('Mobster')]
#[Concept('DamageCapacity', 14)]
#[Concept('Size', 4)]
#[Concept('Speed', 4)]
#[Concept('Cost', 3)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Striving to be made, doing the dirty work.</x-card.flavortext>

            <x-card.cardrule >
<x-card.ruleline class="smallrule">You must already have a Boss on the Battlefield</x-card.ruleline>
<x-card.ruleline class="smallrule">to put this card on the Battlefield.</x-card.ruleline>
</x-card.cardrule>

HTML;
    }
};
