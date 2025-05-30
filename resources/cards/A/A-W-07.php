<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Butterfly Knife')]
#[Concept('Item')]
#[Concept('Weapon')]
#[Concept('Cost', 3)]
#[ImageCredit('Icon by Skoll on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg><path d="M311.96 258.5L105.55 484l-30-28.31L288.92 236.7zM139.77 417.7a7.41 7.41 0 1 0 .3 10.47 7.41 7.41 0 0 0-.3-10.47zm23.74-25.14a7.41 7.41 0 1 0 .3 10.47 7.41 7.41 0 0 0-.29-10.44zm23.76-25.11a7.41 7.41 0 1 0 .3 10.47 7.41 7.41 0 0 0-.3-10.47zm23.74-25.15a7.41 7.41 0 1 0 .3 10.47 7.41 7.41 0 0 0-.3-10.47zm23.76-25.14a7.41 7.41 0 1 0 .3 10.47 7.41 7.41 0 0 0-.3-10.47zm23.74-25.14a7.41 7.41 0 1 0 .3 10.47 7.41 7.41 0 0 0-.31-10.47zm23.74-25.14a7.41 7.41 0 1 0 .3 10.47 7.41 7.41 0 0 0-.3-10.47zM52.67 433.13l-28.26-30 225.85-206 21.71 23.02zm36.9-63.05a7.41 7.41 0 1 0-.32 10.47 7.41 7.41 0 0 0 .33-10.47zm25.2-23.7a7.41 7.41 0 1 0-.32 10.47 7.41 7.41 0 0 0 .32-10.47zm25.17-23.68a7.41 7.41 0 1 0-.32 10.47 7.41 7.41 0 0 0 .32-10.47zm25.18-23.7a7.41 7.41 0 1 0-.32 10.47 7.41 7.41 0 0 0 .32-10.5zm25.18-23.7a7.41 7.41 0 1 0-.32 10.47 7.41 7.41 0 0 0 .32-10.5zm25.18-23.7a7.41 7.41 0 1 0-.32 10.47 7.41 7.41 0 0 0 .32-10.51zm25.18-23.7a7.41 7.41 0 1 0-.32 10.47 7.41 7.41 0 0 0 .32-10.51zm63.89 1.63c12.87-10.8 25.09-20.92 37-30.79C425.04 129.57 475.68 87.63 487.59 28c-8.36 6.7-63.45 50.38-92.82 58.58l-114 119.47z" fill="#fff" fill-opacity="1"></path></x-card.hero.svg>

<x-card.flavortext>Expands like a butterfly, stings like a bee.</x-card.flavortext>

<x-card.cardrule y="580" :lines="1">
<x-card.smallrule>Attach this card to a Mobster.</x-card.smallrule>
        </x-card.cardrule>
       
<x-card.phaserule type="Resolution" lines="1">
<text >
<x-card.normalrule>Speed @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
