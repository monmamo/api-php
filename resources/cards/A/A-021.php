<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Breeder')]
#[Concept('Vendor')]
#[Concept('Integrity', '4')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.phaserule type="Draw" lines="4">
                <text >
    <x-card.normalrule>Search your Library for a Monster</x-card.normalrule>
    <x-card.normalrule>card. Put that card in your hand.</x-card.normalrule>
    <x-card.normalrule>Shuffle your library. Then put</x-card.normalrule>
<x-card.normalrule>this card on the bottom of your library.</x-card.normalrule>
    </text></x-card.phaserule>

HTML;
    }
};
