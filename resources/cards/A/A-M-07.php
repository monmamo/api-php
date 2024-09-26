<?php

return [
    'name' => 'Energos Monster L35',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:65', 'Level:35', 'Size:12', 'Speed:18', 'Multiplier:x2'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Energos, TODO</x-card.normalrule>
</x-card.cardrule>
HTML
];
