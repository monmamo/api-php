<?php

return [
    'name' => 'Pyrohystrix L45',

    'concepts' => ['Monster', 'Female', 'DamageCapacity:80', 'Level:45', 'Size:25', 'Speed:8', 'Multiplier:x4'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-12.jpeg)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Pyros, Hystrix</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Hot Quills</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>Does 6d6 damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML
];
