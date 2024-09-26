<?php

return [
    'name' => 'colorless Canor L30',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:70', 'Level:38', 'Size:18', 'Speed:10', 'Multiplier:x3'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Canos</x-card.normalrule>
</x-card.cardrule>
HTML
];
