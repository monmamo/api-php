<?php

return [
    'name' => 'Sticky Floor',

    'concepts' => ['Environment'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => ['Just like an old movie theater.'],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'

<x-card.cardrule height="315" >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule>Upkeep phase: This card may be removed by</x-card.normalrule>
<x-card.normalrule>discarding a number of Water cards equal</x-card.normalrule>
<x-card.normalrule>to the number of Monsters in play.</x-card.normalrule>
<x-card.normalrule>Resolution phase: Motion skills do/prevent</x-card.normalrule>
<x-card.normalrule>only half of their damage.</x-card.normalrule>
</x-card.cardrule>
HTML
];
