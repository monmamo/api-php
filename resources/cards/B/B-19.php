<?php

return [
    'name' => 'Pestilence',

    'concepts' => ['Catastrophe'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'background' => \view('Catastrophe.background'),
    'content' => [
        'Discard all Mobster and Bystander cards in play.',
        'Draw phase: Discard 1 card from your Library before taking any other action.',
        'Resolution phase: After resolving all other effects, each Monster in play takes 1d4 damage.',
    ],
];
