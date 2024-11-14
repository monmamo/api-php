<?php

// inspiration: Giant Stump PTCG card https://bulbapedia.bulbagarden.net/wiki/Giant_Stump_(EX_Legend_Maker_75)
return [
    'name' => 'Giant Stump',

    'concepts' => ['Venue', 'Outdoors'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Venue.background'),
    'content' => <<<'HTML'

<x-card.cardrule height="0" >
<x-card.normalrule>This card may be played only if there are two or three players.</x-card.normalrule>
<x-card.normalrule>The Battlefield may be occupied by no more than 6 Monsters and 4 Anthropes.</x-card.normalrule>
<x-card.normalrule>If there are additional Monsters or Anthropes in the Battlefield, each player in turn, starting with the one playing Giant Stump, discards a Monster or Anthrope.</x-card.normalrule>
</x-card.cardrule>
HTML
];
