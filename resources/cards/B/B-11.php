<?php

return [
    'name' => 'Famine',

    'concepts' => ['Catastrophe'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Catastrophe.background'),
    'content' => <<<'HTML'

<x-card.cardrule height="35" >
<x-card.normalrule>No Food Items can be played.</x-card.normalrule>
</x-card.cardrule>
HTML
];
