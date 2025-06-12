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

<x-card.ruleline>Discard this card if the Place changes.</x-card.ruleline>
<x-card.ruleline>Resolution phase: Each Monster that used an Attack or Defense</x-card.ruleline>
<x-card.ruleline>takes 1d6 more Damage.</x-card.ruleline>

</x-card.cardrule>
HTML
];
