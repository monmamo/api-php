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
    <x-card.normalrule>Choose one of your Monsters on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Shuffle that Monster, all cards attached to it,</x-card.normalrule>
<x-card.normalrule>and Rescue Drone into your Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
