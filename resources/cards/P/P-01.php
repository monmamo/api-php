<?php

return [
    'name' => 'Badlands',

    'concepts' => ['Place', 'Generic'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Place.background'),
    'content' => <<<'HTML'

<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML
];
