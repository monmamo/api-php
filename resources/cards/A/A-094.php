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
    <x-card.cardrule y="480" :lines="2">
        <x-card.smallrule>Put this card on the Battlefield.</x-card.smallrule>
<x-card.smallrule>This card will remain on the Battlefield until it is discarded by rule.</x-card.smallrule>
</x-card.cardrule>

<x-card.phaserule type="Draw" y="580" :lines="1">
    <text >
<x-card.normalrule>Draw 7 cards.</x-card.normalrule>
</text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" :lines="3">
    <text >
<x-card.normalrule>Roll 1d6.</x-card.normalrule>
<x-card.normalrule>If @dieroll(1,2), discard your hand and this card.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text>
</x-card.phaserule>
HTML;
    }
};
