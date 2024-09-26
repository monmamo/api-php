<?php

return [
    'name' => 'Pyros Monster L35',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:65', 'Level:35', 'Size:18', 'Speed:8', 'Multiplier:x3'],

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
