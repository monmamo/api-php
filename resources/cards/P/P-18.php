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
<x-card.ruleline class="smallrule"></x-card.ruleline>
<x-card.ruleline>Resolution phase: Reduce the base value of all Attacks by half.</x-card.ruleline>
</x-card.cardrule>
HTML
];
