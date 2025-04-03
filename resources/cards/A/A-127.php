<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hypnotic Drone')]
#[Concept('Drone')]
#[Concept('Item')]
#[Concept('DamageCapacity', 2)]
#[Concept('Level', 5)]
#[Concept('Size', 2)]
#[Concept('Speed', 3)]
#[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
#[LocalHeroImage('hero/hypnotic-drone.jpeg')]
#[Prerequisites(y: 470)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.phaserule type="Resolution" lines="3"><text>
    <x-card.normalrule>If an opponent's Character attempts any</x-card.normalrule>
        <x-card.normalrule>attack, defense, skill or effect, you may choose</x-card.normalrule>
    <x-card.normalrule>to roll 1d6. If @dieroll(6,5), that move has no effect.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
