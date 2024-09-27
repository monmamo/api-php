<?php

return [
    'name' => 'Regfelor L44',

    'concepts' => ['Monster', 'Male', 'DamageCapacity:65', 'Level:44', 'Size:17', 'Speed:10', 'Multiplier:x2'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/regfelor.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Regos, Felos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Resolution" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Mind Control</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>If attacked, roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6) The attack has no effect.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML
];
