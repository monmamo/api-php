<?php

return [
    'name' => 'Railroad Yard',

    'concepts' => ['Place', 'Generic'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Place.background'),
    'content' => <<<'HTML'
<x-card.cardrule height="95" >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule></x-card.normalrule>
</x-card.cardrule>
HTML
];
