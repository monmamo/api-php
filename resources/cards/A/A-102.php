<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// <x-card
//     credit-color="#000000"
//     :titlebox-opacity="0.25"
// >

return new
#[Title('Garlic')]
#[Concept('Material')]
#[ImageCredit('Image by brgfx on Freepik')]
#[FlavorText(lines: ['A clove a day keeps the doctor away.', '(And everyone else.)'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    /**
     * https://game-icons.net/1x1/delapouite/garlic.html.
     *
     * @implements \App\Contracts\Card\CardComponents::background
     */
    public function background(): \Traversable
    {
        yield <<<'HTML'
 <image x="0" y="0" href="@local(fullsize/garlic.jpg)"  />
 HTML;
    }

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="515" filter="url(#solid)">
    <x-card.smallrule>The effect will last for</x-card.smallrule>
<x-card.smallrule>1d6 turns, including this one.</x-card.smallrule>
<x-card.smallrule>After that many turns, discard this card.</x-card.smallrule>
    </text>

<x-card.phaserule type="Resolution"  y="700" height="135">
    <text >
<x-card.normalrule>Reduce Attack damage</x-card.normalrule>
<x-card.normalrule>done by all other Monsters by 1.</x-card.normalrule>
            </text>
        </x-card.phaserule>
HTML;
    }
};
