<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hypnotic Drone')]
#[Concept('Drone')]
#[Concept('Item')]
#[Concept('Level', 5)]
#[Concept('DamageCapacity', 2)]
#[Concept('Size', 2)]
#[Concept('Speed', 3)]
#[IsGeneratedImage]
#[ImageIsPrototype]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/hypnotic-drone.jpeg</x-card.hero.local>

<rect x="0" y="625" width="610" height="170" fill="#ffffff" fill-opacity="100%" />
<g  transform="translate(3,628) scale(0.125)" fill="#000000" fill-opacity="1">
{{ \App\Concept::make("Resolution")->icon() }}
    </g>
<text x="0" y="625" width="610" height="170">
    <x-card.normalrule>If an opponent's Character attempts</x-card.normalrule>
        <x-card.normalrule>any attack, defense, skill or effect,</x-card.normalrule>
        <x-card.normalrule>you may choose to roll 1d6.</x-card.normalrule>
        <x-card.normalrule>If @dieroll(6,5), that move has no effect.</x-card.normalrule>
    </text>
HTML;
    }
};
