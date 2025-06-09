<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Rescue Drone')]
#[Concept('Drone')]
#[Concept('Item')]
#[Concept('Level', 5)]
#[Concept('DamageCapacity', 10)]
#[Concept('Size', 25)]
#[Concept('Speed', 4)]
#[Concept('Cost', 4)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.cardrule  >
    <x-card.ruleline>Choose one of your Monsters on the Battlefield.</x-card.ruleline>
<x-card.ruleline>Shuffle that Monster, all cards attached to it,</x-card.ruleline>
<x-card.ruleline>and Rescue Drone into your Library.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
