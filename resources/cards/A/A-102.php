<?php

use App\CardAttributes\CardNameColor;
use App\CardAttributes\CardTools;
use App\CardAttributes\CreditColor;
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
#[CreditColor('#000000')]
#[CardNameColor('#000000')]
#[FlavorText(lines: ['A clove a day keeps the doctor away.', '(And everyone else.)'])]
class(__FILE__) implements CardComponents
{
    use CardTools;
    use DefaultCardAttributes;

    /**
     * https://game-icons.net/1x1/delapouite/garlic.html.
     *
     * @implements \App\Contracts\Card\CardComponents::background
     */
    public function background(): \Traversable
    {
        yield $this->fullSizeBackground('fullsize/garlic.jpg');
    }

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" >
    <text >
    <x-card.ruleline class="smallrule">The effect will last for</x-card.ruleline>
<x-card.ruleline class="smallrule">1d6 turns, including this one.</x-card.ruleline>
<x-card.ruleline class="smallrule">After that many turns, discard this card.</x-card.ruleline>
<x-card.ruleline>Reduce Attack damage</x-card.ruleline>
<x-card.ruleline>done by all other Monsters by 1.</x-card.ruleline>
            </text>
        </x-card.phaserule>
HTML;
    }
};
