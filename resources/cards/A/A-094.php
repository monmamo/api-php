<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Binge')]
#[Concept('Draw')]
// #[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.cardrule y="480" :>
        <x-card.ruleline class="smallrule">Put this card on the Battlefield.</x-card.ruleline>
<x-card.ruleline class="smallrule">This card will remain on the Battlefield until it is discarded by rule.</x-card.ruleline>
</x-card.cardrule>

<x-card.phaserule type="Draw" y="580" :>
    <text >
<x-card.ruleline>Draw 7 cards.</x-card.ruleline>
</text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" :>
    <text >
<x-card.ruleline>Roll 1d6.</x-card.ruleline>
<x-card.ruleline>If @dieroll(1,2), discard your hand and this card.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text>
</x-card.phaserule>
HTML;
    }
};
