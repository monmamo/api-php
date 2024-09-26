<?php

return [
    'name' => 'Aquofeless L40',

    'concepts' => ['Monster', 'Female', 'DamageCapacity:90', 'Level:40', 'Size:20', 'Speed:10', 'Multiplier:x3'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Aquos, Felos</x-card.normalrule>
</x-card.cardrule>
HTML
];
