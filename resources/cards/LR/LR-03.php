<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cotton Shopping Bag')]
#[Concept('Cost', 4)]
#[ImageCredit('Image by Delapouite on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'

<x-card.flavortext>
<x-card.flavortext.line>After the raid, do the environment a solid</x-card.flavortext.line>
<x-card.flavortext.line>by putting your groceries in it.</x-card.flavortext.line>
</x-card.flavortext>

<x-card.hero.svg><path d="M256 23c-35 0-62 17.92-79.3 41.71-11.9 16.38-19.6 35.49-23.2 54.29H172c3.4-15.2 9.9-30.77 19.3-43.71C206 55.08 227 41 256 41s50 14.08 64.7 34.29c9.4 12.94 15.9 28.51 19.3 43.71h18.5c-3.6-18.8-11.3-37.91-23.2-54.29C318 40.92 291 23 256 23zM88.25 137 57.81 487H454.2l-30.4-350H88.25zM160 160a16 16 0 0 1 16 16 16 16 0 0 1-16 16 16 16 0 0 1-16-16 16 16 0 0 1 16-16zm192 0a16 16 0 0 1 16 16 16 16 0 0 1-16 16 16 16 0 0 1-16-16 16 16 0 0 1 16-16z" fill="#ffffff" fill-opacity="1" /></x-card.hero.svg>

<x-card.cardrule >
<x-card.ruleline>On acquire, place this card in your playing area.</x-card.ruleline>
<x-card.ruleline>You may put up to 7 Evidence points</x-card.ruleline>
<x-card.ruleline>in it from your hand or discard pile.</x-card.ruleline>
</x-card.cardrule>

HTML;
    }
};
