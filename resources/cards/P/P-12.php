<?php

return [
    'name' => 'Maze',

    'concepts' => ['Venue'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Venue.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Resolution phase: Before applying the effect of any skill, roll 1d6. If ⚀⚂⚃⚃, the skill has no effect.</x-card.ruleline>
</x-card.cardrule>
HTML
];
