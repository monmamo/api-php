<?php

return [
    'name' => 'Energcanor L45',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:80', 'Level:45', 'Size:22', 'Speed:8', 'Multiplier:x3'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Energos, Canos</x-card.normalrule>
</x-card.cardrule>
HTML
];
