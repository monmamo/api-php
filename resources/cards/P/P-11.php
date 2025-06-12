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
<x-card.phaserule type="Resolution" >
<text >
<x-card.ruleline>After all attacks and skills are resolved,</x-card.ruleline>
<x-card.ruleline>for each Monster that did not attack,</x-card.ruleline>
<x-card.ruleline>you may restore 2 @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML
];
