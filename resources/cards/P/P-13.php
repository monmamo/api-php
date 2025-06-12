<?php

// Tight Space?
// inspiration: https://bulbapedia.bulbagarden.net/wiki/Narrow_Gym_(Gym_Heroes_124)
return [
    'name' => 'Narrow Battlefield',

    'concepts' => ['Environment'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'
<x-card.cardrule height="275" >
<x-card.ruleline>This card may be played only if there are two or three players.</x-card.ruleline>
<x-card.ruleline>The Battlefield may be occupied by no more than 9 Monsters and 4 Anthropes.</x-card.ruleline>
<x-card.ruleline>If there are additional Monsters or Anthropes in the Battlefield,</x-card.ruleline>
<x-card.ruleline>each player in turn, starting with the one playing Narrow Battlefield,</x-card.ruleline>
<x-card.ruleline>discards a Monster or Anthrope.</x-card.ruleline>
</x-card.cardrule>
HTML
];
