<?php

return [
    'name' => 'Lutress L35',

    'concepts' => ['Monster', 'Female', 'DamageCapacity:80', 'Level:35', 'Size:18', 'Speed:8', 'Multiplier:x2'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Aquos, Lutros</x-card.normalrule>
</x-card.cardrule>
HTML
];
