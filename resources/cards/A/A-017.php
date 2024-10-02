<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: https://bulbapedia.bulbagarden.net/wiki/Caitlin_(Plasma_Blast_78)
return new
#[Title('Sleight of Hand')]
#[Concepts('Draw')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Draw" lines="4"><text>
<x-card.normalrule>Put any number of cards from your</x-card.normalrule>
    <x-card.normalrule>hand on the bottom of your Library in </x-card.normalrule>
    <x-card.normalrule>any order. Then, draw a card for each card</x-card.normalrule>
    <x-card.normalrule>you put on the bottom of your Library.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
