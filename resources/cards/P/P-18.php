<?php

return [
    'name' => 'Sewage Treatment Plant',

    'concepts' => ['Facility'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Facility.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule>Resolution phase: Reduce the base value of all Attacks by half.</x-card.normalrule>
</x-card.cardrule>
HTML
];
