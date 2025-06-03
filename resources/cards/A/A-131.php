<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Insurance Policy')]
#[Concept('Vendor')]
#[Concept('Cost', 3)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" lines="4"><text>
<x-card.smallrule>You can't play this card if you have any</x-card.smallrule>
<x-card.smallrule>cards in your hand other than this card.</x-card.smallrule>
<x-card.normalrule>Show your hand to your opponent(s),</x-card.normalrule>
    <x-card.normalrule>then draw 5 cards.</x-card.normalrule>
    <x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
    </text></x-card.phaserule>
HTML;
    }
};
