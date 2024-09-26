<?php

return [
    'name' => 'Aquomusor L30',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:70', 'Level:30', 'Size:12', 'Speed:20', 'Multiplier:x2'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Aquos, Musos</x-card.normalrule>
</x-card.cardrule>
HTML
];
