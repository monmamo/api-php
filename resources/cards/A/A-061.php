<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Make It Rain')]
#[Concept('Draw')]
#[Concept('Cost', 3)]
#[ImageCredit('Image by wirestock on Freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local source="https://www.freepik.com/free-photo/throwing-money-air-being-happy_10978858.htm">A-002.jpg</x-card.hero.local>

<x-card.flavortext>Who says money can't buy popularity?</x-card.flavortext>

<x-card.phaserule type="Draw" ><text>
    <x-card.normalrule>Every player may draw up to 5 cards.</x-card.normalrule>
    <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
