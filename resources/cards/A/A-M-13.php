<?php

return [
    'name' => 'Felequess L48',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:90', 'Level:48', 'Size:28', 'Speed:16', 'Multiplier:x4'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/felequos.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Felequos</x-card.normalrule>
</x-card.cardrule>
HTML
];
