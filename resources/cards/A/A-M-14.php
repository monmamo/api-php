<?php

return [
    'name' => 'colorless monster L44',

    'concepts' => ['Monster', 'Female', 'DamageCapacity:75', 'Level:44', 'Size:23', 'Speed:10', 'Multiplier:x4'],

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
