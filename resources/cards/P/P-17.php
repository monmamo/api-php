<?php

return [
    'name' => 'Scrubland',

    'concepts' => ['Place', 'Generic'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Place.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.ruleline class="smallrule"></x-card.ruleline>
<x-card.ruleline></x-card.ruleline>
</x-card.cardrule>
HTML
];
