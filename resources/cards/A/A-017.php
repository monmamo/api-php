<?php

// inspiration: https://bulbapedia.bulbagarden.net/wiki/Caitlin_(Plasma_Blast_78)
return [
    'name' => 'Sleight of Hand',

    'concepts' => [
        'Draw',
    ],

    'image-prompt' => null,

    'background' => \view('Draw.background'),

    'content' => <<<'HTML'
<x-card.phaserule type="Draw" lines="4"><text>
<x-card.normalrule>Put any number of cards from your</x-card.normalrule>
    <x-card.normalrule>hand on the bottom of your Library in </x-card.normalrule>
    <x-card.normalrule>any order. Then, draw a card for each card</x-card.normalrule>
    <x-card.normalrule>you put on the bottom of your Library.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
