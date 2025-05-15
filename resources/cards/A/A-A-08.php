<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Forehead Strike')]
#[Concept('Attack')]
#[Concept('Level', 30)]
#[Concept('Cost', 5)]
#[ImageCredit('Icon by Delapouite on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>
<x-card.flavortext.line>Knife hand to the forehead.</x-card.flavortext.line>
<x-card.flavortext.line>Stuns but does not do damage.</x-card.flavortext.line>
    </x-card.flavortext>

<x-card.hero.svg>
<g fill="#ffffff" fill-opacity="1"><x-icons.meeple  /></g>
<g fill="#ff0000" fill-opacity="1" transform="translate(192,16) scale(0.25)"><x-icons.crosshair  /></g>
</x-card.hero.svg>

<x-card.phaserule type="Resolution" lines="3"><text>
        <x-card.normalrule>For 1d4 turns hence, the</x-card.normalrule>
<x-card.normalrule>affected Character cannot attack,</x-card.normalrule> 
<x-card.normalrule>cannot defend, and has Speed of 0.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
