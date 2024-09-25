<?php

return [
    'name' => 'Lottery',

    'concepts' => ['Vendor'],

    'image-prompt' => null,
    'image-source' => 'https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm',
    'image-credit' => 'Image by storyset on Freepik',

    'flavor-text' => ["Can't win if you don't play!"],
    'background' => \view('Vendor.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A146.jpg)"  />
<x-card.phaserule type="Draw" lines="2"><text>    
        <x-card.normalrule>Discard 2+ cards from your hand.</x-card.normalrule>
        <x-card.normalrule>Then draw that number plus two cards.</x-card.normalrule>
    </text></x-card.phaserule>
HTML
];
