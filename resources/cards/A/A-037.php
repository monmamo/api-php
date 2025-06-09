<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalBackgroundImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: https://bulbapedia.bulbagarden.net/wiki/Canceling_Cologne_(Astral_Radiance_136)

return new
#[Concept('Item')]
#[Concept('Cost', 2)]
#[ImageCredit('Image by Freepik')]
#[LocalBackgroundImage('fullsize/cologne.jpg')]
#[Title('Eau de Resistance')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>A scent that monsters can't compete with.</x-card.flavortext>

<x-card.cardrule >
<x-card.ruleline class="smallrule">{{ __('rules.attach-to-monster')}}</x-card.ruleline>
<x-card.ruleline>For 1d4 turns, this Monster</x-card.ruleline>
<x-card.ruleline>cannot be the target of an Attack.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
