<?php

// inspiration: High Pressure System PTCG card https://bulbapedia.bulbagarden.net/wiki/High_Pressure_System_(POP_Series_3_10)
return [
    'name' => 'High Pressure System',

    'concepts' => ['Environment', 'Weather'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Has no effect in an Enclosed Venue.</x-card.ruleline>
<x-card.ruleline>Resolution phase: Add 1d6 @damage to any damage caused by a Water or Fire mana card.</x-card.ruleline>
</x-card.cardrule>
HTML
];
