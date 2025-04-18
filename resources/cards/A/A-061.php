<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Make It Rain')]
#[Concept('Draw')]
#[ImageCredit('Image by wirestock on Freepik')]
#[FlavorText('Who says money can\'t buy popularity?')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A-002.jpg)" source="https://www.freepik.com/free-photo/throwing-money-air-being-happy_10978858.htm" />

<x-card.phaserule type="Draw" lines="2"><text>
    <x-card.normalrule>Every player may draw up to 5 cards.</x-card.normalrule>
    <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
