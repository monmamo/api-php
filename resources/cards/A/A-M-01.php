<?php

return [
    'name' => 'Aquomusor L30',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:70', 'Level:30', 'Size:12', 'Speed:20', 'Multiplier:x2'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-01.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Aquos, Musos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Slippery When Wet</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>Takes no damage from physical attacks</x-card.normalrule>
<x-card.normalrule>when 1+ Water Mana attached.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML
];
