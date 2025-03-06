<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalBackgroundImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: https://bulbapedia.bulbagarden.net/wiki/Canceling_Cologne_(Astral_Radiance_136)

return new
#[Concept('Item')]
#[FlavorText('A scent that monsters can\'t compete with.')]
#[ImageCredit('Image by Freepik')]
#[LocalBackgroundImage('fullsize/cologne.jpg')]
#[Title('Eau de Resistance')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="495" filter="url(#solid)">
      <x-card.smallrule>{{ __('rules.attach-to-monster')}}</x-card.smallrule>
    </text>

<x-card.phaserule type="Command" lines="2">
    <text >
        <x-card.normalrule>For 1d4 turns, this Monster</x-card.normalrule>
            <x-card.normalrule>cannot be the target of an Attack.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
