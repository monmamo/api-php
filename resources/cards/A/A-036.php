<?php

return [
    'name' => 'Boss',

    'concepts' => ['Mobster'],

    'image-prompt' => null,

    'image-credit' => 'Elements of image from Game-Icons.net',

    'flavor-text' => ['His way or the highway.'],
    'background' => \view('Mobster.background'),
    'content' => <<<'HTML'
    <g transform="scale(2.75) translate(-148,-60)">
    <path d="M257.408 22.127l-23.082 62.035-31.017-57.707-11.542 59.15-44.002-55.543L154.26 110c27.263 27.263 178.638 27.663 206.3 0l5.772-79.936-44.002 55.543-11.54-59.15-31.02 56.986-22.36-61.313h-.002z" ></path>
    </g>
<x-card.phaserule type="Draw" lines="3" badge="Repeat">
        <text >
        <x-card.normalrule>You may draw 1 card</x-card.normalrule>
        <x-card.normalrule>for each Mobster you have on the Battlefield.</x-card.normalrule>
        <x-card.normalrule>Then you may take another Draw phase.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];
