<?php

return [
    'name' => 'Fire Shield',

    'concepts' => ['Defense'],

    'image-prompt' => null,

    'image-credit' => '',

    'flavor-text' => [],
    'background' => \view('Defense.background'),
    'content' => <<<'HTML'
<g class="svg-hero"><?= view('Pyros.icon') ?></g>
<x-card.phaserule type="Resolution" height="175">
    <text >
    <x-card.smallrule>Requires Pyros.</x-card.smallrule>
<x-card.normalrule>For each Fire card attached to this Monster,</x-card.normalrule>
<x-card.normalrule>prevent 1d6 damage. Discard all Fire cards</x-card.normalrule>
<x-card.normalrule>attached to this Monster</x-card.normalrule>
(even if they weren't needed to prevent damage).
</text>
</x-card.phaserule>
HTML
];
