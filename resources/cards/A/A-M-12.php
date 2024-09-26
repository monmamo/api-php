<?php

return [
    'name' => 'Pyrohystrix L45',

    'concepts' => ['Monster', 'Female', 'DamageCapacity:80', 'Level:45', 'Size:25', 'Speed:8', 'Multiplier:x4'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Pyros, Hystrix</x-card.normalrule>
</x-card.cardrule>
HTML
];
