<?php

return [
    'name' => 'Energos Monster L35',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:65', 'Level:35', 'Size:12', 'Speed:18', 'Multiplier:x2'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-07.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Energos, TODO</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Skill" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Puppy Power</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>You may transfer Energy Mana between</x-card.normalrule>
<x-card.normalrule>this Monster & any other Energos Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
