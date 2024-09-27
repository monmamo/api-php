<?php

return [
    'name' => 'Pyrorodent L30',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:60', 'Level:30', 'Size:13', 'Speed:17', 'Multiplier:x2'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-09.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Pyros, TODO</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Upkeep" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Fiery Pest</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>Discard 1 Mobster or Bystander</x-card.normalrule>
<x-card.normalrule>from the Battlefield.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
