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
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="275" >
<x-card.normalrule>This card may be played only if there are two or three players.</x-card.normalrule>
<x-card.normalrule>The Battlefield may be occupied by no more than 9 Monsters and 4 Anthropes.</x-card.normalrule>
<x-card.normalrule>If there are additional Monsters or Anthropes in the Battlefield,</x-card.normalrule>
<x-card.normalrule>each player in turn, starting with the one playing Narrow Battlefield,</x-card.normalrule>
<x-card.normalrule>discards a Monster or Anthrope.</x-card.normalrule>
</x-card.cardrule>
HTML
];
