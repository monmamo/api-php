<?php

return [
    'name' => 'Hot Desert',

    'concepts' => ['Place', 'Generic'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => ['A natural geographical area characterized by persistent high temperatures and a lack of precipitation.'],
    'background' => \view('Place.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>TODO</x-card.ruleline>
</x-card.cardrule>
HTML
];
