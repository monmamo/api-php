<?php

return [
    'name' => 'Pyros Monster L35',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:65', 'Level:35', 'Size:18', 'Speed:8', 'Multiplier:x3'],

    'image-prompt' => 'red panda of weird zoology shooting fire from its mouth',
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-10.jpeg)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Pyros, TODO</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Upkeep" height="210">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Flaming Tail</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="105">
<x-card.normalrule>Once per turn, you may search your</x-card.normalrule>
<x-card.normalrule>Library or Discard for a Fire Mana</x-card.normalrule>
<x-card.normalrule>and attach it to this Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
