<?php

return [
    'name' => 'Aquos Monster L45',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:95', 'Level:45', 'Size:25', 'Speed:10', 'Multiplier:x4'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-04.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Aquos, TODO</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="210">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Water Jet</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="105">
<x-card.normalrule>Discard 1+ Water Mana from this Monster.</x-card.normalrule>
<x-card.normalrule>For each Water Mana discarded,</x-card.normalrule>
<x-card.normalrule>does 10 damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
