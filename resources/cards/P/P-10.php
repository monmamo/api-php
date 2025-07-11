<?php

// inspiration: Low Pressure System PTCG card https://bulbapedia.bulbagarden.net/wiki/Low_Pressure_System_(EX_Dragon_86)
return [
    'name' => 'Low Pressure System',

    'concepts' => ['Environment', 'Weather'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'
<x-card.cardrule height="110" >
<x-card.ruleline>Has no effect in an Enclosed Venue.</x-card.ruleline>
<x-card.ruleline>Resolution phase: Add 1d6 @damage to any damage caused by an Electricity mana card.</x-card.ruleline>
</x-card.cardrule>
HTML
];
