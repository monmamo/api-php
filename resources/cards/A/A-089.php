<?php

// Compare Hand Scope (A-115).
// https://www.freepik.com/free-vector/flying-drone-camera-cartoon-vector-icon-illustration-object-technology-icon-concept-isolated-flat_25847529.htm

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Spy Drone')]
#[Concept('Drone')]
#[Concept('Item')]
#[Concept('Level', 5)]
#[Concept('DamageCapacity', 2)]
#[Concept('Size', 2)]
#[Concept('Speed', 6)]
#[Concept('Cost', 3)]
#[ImageCredit('Image by catalyststuff on Freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>A312.jpg</x-card.hero.local>

<x-card.flavortext>Here's lookin' at you, kid.</x-card.flavortext>

<x-card.phaserule type="Upkeep" ><text>
    <x-card.normalrule>You may ask one opponent</x-card.normalrule>
    <x-card.normalrule>to show you their hand.</x-card.normalrule>
    <x-card.normalrule>(Only you get to see the hand.)</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
