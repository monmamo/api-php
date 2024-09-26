<?php

return [
    'name' => 'Pyrorodent L30',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:60', 'Level:30', 'Size:13', 'Speed:17', 'Multiplier:x2'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Pyros, TODO</x-card.normalrule>
</x-card.cardrule>
HTML
];
