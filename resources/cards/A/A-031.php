<?php

return [
    'name' => 'Dual Cranial Horns',

    'concepts' => ['Trait', 'Physical'],

    'image-prompt' => null,

    'image-credit' => 'Image by wirestock on Freepik',

    'flavor-text' => [],

    'background' => \view('Trait.background'),

    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A064.jpg)" source="https://www.freepik.com/free-photo/closeup-shot-beautiful-thompson-s-gazelle_10292458.htm" />
    <x-card.phaserule type="Resolution" lines="3"><text>
    <x-card.normalrule>Size +6.</x-card.normalrule>
<x-card.normalrule>Gives the attack “Horn Attack”</x-card.normalrule>
<x-card.normalrule>which does Speed×2 damage.</x-card.normalrule>
    </text></x-card.phaserule>
HTML
];
