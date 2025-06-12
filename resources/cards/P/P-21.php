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
<x-card.ruleline class="smallrule"></x-card.ruleline>
<x-card.ruleline>Upkeep phase: This card may be removed by</x-card.ruleline>
<x-card.ruleline>discarding a number of Water cards equal</x-card.ruleline>
<x-card.ruleline>to the number of Monsters in play.</x-card.ruleline>
<x-card.ruleline>Resolution phase: Motion skills do/prevent</x-card.ruleline>
<x-card.ruleline>only half of their damage.</x-card.ruleline>
</x-card.cardrule>
HTML
];
