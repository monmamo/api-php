<?php

// _inspiration: Stadium Nav https://bulbapedia.bulbagarden.net/wiki/Stadium_Nav_(Unified_Minds_208)
return [
    'name' => 'Navigator',

    'concepts' => ['Draw'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Draw.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.normalrule>Search your Library for a Place card, reveal it, and put it in your hand. Then shuffle your Library.</x-card.normalrule>
</x-card.cardrule>
HTML
];
