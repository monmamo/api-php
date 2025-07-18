<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tickle')]
#[Concept('Attack')]
#[Concept('Level', 20)]
#[Concept('Cost', 4)]
#[ImageCredit('Icon by Delapouite on Game-Icons.net')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'

<x-card.flavortext>A well-timed Tickle can be devastatingly effective.</x-card.flavortext>

<x-card.hero.svg>
<g fill="#ffffff" fill-opacity="1"><x-icons.meeple  /></g>
<g fill="#ff0000" fill-opacity="1" transform="translate(0,216) scale(1,0.25)"><x-icons.crosshair  /></g>
</x-card.hero.svg>

<x-card.cardrule >
<x-card.ruleline>Does 3xSpeed damage.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
