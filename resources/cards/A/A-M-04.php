<?php

return [
    'name' => 'Aquos Monster L45',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:95', 'Level:45', 'Size:25', 'Speed:10', 'Multiplier:x4'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Aquos, TODO</x-card.normalrule>
</x-card.cardrule>
HTML
];
