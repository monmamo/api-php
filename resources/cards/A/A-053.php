<?php
return [
    'name' => 'Brutality',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'image-credit' => '',

    'flavor-text' => [],
    'background' => \view('Trait.background'),
    'content' => <<<'HTML'
<x-card.phaserule type="Resolution" y="135" height="135">
    <text >
<x-card.normalrule>When this Monster attacks,</x-card.normalrule>
<x-card.normalrule>perform two rolls for every roll check.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];
