<?php

return [
    'name' => 'Tranquilizer Dart',

    'concepts' => ['Bane', 'Item', 'Weapon'],

    'image-prompt' => null,

    'image-credit' => 'Shutterstock #169987271 by Inked Pixels',
    'image-source' => 'https://www.shutterstock.com/image-photo/3d-rendering-tranquilizer-dart-on-white-169987271',

    'flavor-text' => ['Ouuuuuch……'],
    'background' => \view('Bane.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/tranquilizer-dart.jpg)"  />
<text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

    <x-card.phaserule type="Upkeep"  height="100">
        <text >    
<x-card.normalrule>For 1d4 turns (including this one),</x-card.normalrule>
<x-card.normalrule>apply Paralysis.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
