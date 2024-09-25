<?php

return [
    'name' => 'Breeder',

    'concepts' => ['Vendor', 'Integrity:1d4'],

    'image-prompt' => null,

    'background' => \view('Vendor.background'),

    'content' => <<<'HTML'
<text y="500" filter="url(#solid)">
    <x-card.normalrule>Search your Library for a Monster card.</x-card.normalrule>
    <x-card.normalrule>Put that card in your hand.</x-card.normalrule>
</text>

HTML
];
