<?php

// Compare Masseuse (A-132).
return [
    'name' => 'Massage Parlor',

    'concepts' => ['Facility'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Facility.background'),
    'content' => <<<'HTML'

<x-card.cardrule height="55" >
<x-card.normalrule>Resolution phase: After all attacks and skills are resolved, remove 4 damage from each of your Monsters that is not Knocked Out.</x-card.normalrule>
</x-card.cardrule>
HTML
];
