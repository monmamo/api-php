<?php

return [
    'name' => 'Broken Ground',

    'concepts' => ['Environment'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'
<x-card.cardrule >

<x-card.normalrule>Discard this card if the Place changes.</x-card.normalrule>
<x-card.normalrule>Resolution phase: Each Monster that used an Attack or Defense</x-card.normalrule>
<x-card.normalrule>takes 1d6 more Damage.</x-card.normalrule>

</x-card.cardrule>
HTML
];
