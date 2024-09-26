<?php

return [
    'name' => 'Biting',

    'concepts' => ['Trait'],
    'ai' => true,
    'image-prompt' => null,
    'image-credit' => null,

    'flavor-text' => ['What sharp teeth you have.'],
    'background' => \view('Trait.background'),
    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A006.png)" source="https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm" />

    <x-card.phaserule type="Attack" height="140">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Bite</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="35">
<x-card.normalrule>Does Speed×3 damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
