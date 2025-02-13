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
<x-card.phaserule type="Resolution" lines="4">
<text >
<x-card.normalrule>After all attacks and skills are resolved,</x-card.normalrule>
<x-card.normalrule>for each Monster that did not attack,</x-card.normalrule>
<x-card.normalrule>you may restore 2 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
