<?php

return [
    'name' => 'colorless monster L42',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:70', 'Level:42', 'Size:22', 'Speed:12', 'Multiplier:x4'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: TODO</x-card.normalrule>
</x-card.cardrule>
HTML
];
