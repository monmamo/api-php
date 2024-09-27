<?php

return [
    'name' => 'Therapeudic Dander',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => null,
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="95" >
<x-card.smallrule>Requires Floros.</x-card.smallrule>
<x-card.normalrule>Upkeep phase:: Remove 1d4 damage from each Monster in play (both yours and your opponents').</x-card.normalrule>
</x-card.cardrule>
HTML
];
