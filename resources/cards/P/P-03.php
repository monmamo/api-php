<?php

return [
    'name' => 'Bayou',

    'concepts' => ['Place', 'Generic', 'Swamp', 'Forest'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Place.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>TODO</x-card.ruleline>
</x-card.cardrule>
HTML
];
