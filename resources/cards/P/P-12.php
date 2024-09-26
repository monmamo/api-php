<?php

return [
    'name' => 'Maze',

    'concepts' => ['Venue'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Venue.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="55" >
<x-card.normalrule>Resolution phase: Before applying the effect of any skill, roll 1d6. If ⚀⚂⚃⚃, the skill has no effect.</x-card.normalrule>
</x-card.cardrule>
HTML
];
