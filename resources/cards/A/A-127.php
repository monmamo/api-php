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
#[Concept('DamageCapacity', 5)]
#[Concept('Level', 5)]
#[Concept('Size', 5)]
#[Concept('Speed', 10)]
#[IsGeneratedImage]
#[LocalHeroImage('hero/hypnotic-drone.jpeg')]
#[Prerequisites(y: 470)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.phaserule type="Resolution" lines="4"><text>
    <x-card.normalrule>If an opponent's Monster, Master,</x-card.normalrule>
    <x-card.normalrule>Mobster or Bystander attempts any </x-card.normalrule>
        <x-card.normalrule>attack, defense, skill or effect, you may choose</x-card.normalrule>
    <x-card.normalrule>to roll 1d6. If @dieroll(6,5), that move has no effect.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
