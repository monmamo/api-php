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
        <x-card.phaserule type="Draw" >
                <text >
    <x-card.ruleline>Search your Library for a Monster</x-card.ruleline>
    <x-card.ruleline>card. Put that card in your hand.</x-card.ruleline>
    <x-card.ruleline>Shuffle your library. Then put</x-card.ruleline>
<x-card.ruleline>this card on the bottom of your library.</x-card.ruleline>
    </text></x-card.phaserule>

HTML;
    }
};
