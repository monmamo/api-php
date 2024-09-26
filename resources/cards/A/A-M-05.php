<?php

return [
    'name' => 'Energos Monster L30',

    'concepts' => ['Monster', 'Female', 'DamageCapacity:60', 'Level:30', 'Size:16', 'Speed:10', 'Multiplier:x3'],

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
