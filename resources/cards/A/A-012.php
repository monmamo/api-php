<?php

return [
    'name' => 'Basic Lure',
    'concepts' => ['Draw', 'Item', 'Lure'],
    'image-prompt' => null,

    'background' => \view('Draw.background'),

    'image-credit' => 'Image by Lorc on Game-Icons.net under CC BY 3.0',

    // https://game-icons.net/1x1/lorc/gift-trap.html

    'content' => <<<'HTML'
<x-card.phaserule type="Draw" lines="5"><text>
    <x-card.normalrule>Roll 1d6.</x-card.normalrule>
    <x-card.normalrule>If @dieroll(6,5,4), you may search your Library </x-card.normalrule>
    <x-card.normalrule>for a Monster card. </x-card.normalrule>
    <x-card.normalrule>Reveal that/those card(s). </x-card.normalrule>
    <x-card.normalrule>Put that/those card(s) in your hand.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
