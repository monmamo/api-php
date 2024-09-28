<?php

return [
    'name' => 'Stickiness',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'image-credit' => '',

    'flavor-text' => [],
    'background' => \view('Trait.background'),
    'content' => <<<'HTML'
<text>
<x-card.normalrule>Attempt to remove an Item from this Monster</x-card.normalrule>
<x-card.normalrule>succeeds only if 1d6 equals @dieroll(5,6).</x-card.normalrule>
</text>
HTML
];
