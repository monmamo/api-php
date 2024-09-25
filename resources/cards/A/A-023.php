<?php

return [
    'name' => 'Cunning',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'background' => \view('Trait.background'),

    'content' => <<<'HTML'
    <x-card.phaserule type="Upkeep" lines="4">
        <text >
    <x-card.normalrule>Choose a Library.</x-card.normalrule>
<x-card.normalrule>Look at the top 4 cards of that Library</x-card.normalrule>
<x-card.normalrule>without rearranging them.</x-card.normalrule>
<x-card.normalrule>Then you may shuffle that Library.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
