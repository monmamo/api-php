<?php

return [
    'name' => 'Bathhouse',

    'concepts' => ['Facility', 'Generic'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Facility.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Resolution phase: Reduce damage done by Attacks by 4.</x-card.ruleline>
</x-card.cardrule>
HTML
];
