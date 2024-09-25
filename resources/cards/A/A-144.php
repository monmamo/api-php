<?php

return [
    'name' => 'Taxman',

    'concepts' => ['Mobster', 'Integrity:1d4'],

    'image-prompt' => null,

    'image-credit' => 'Image by macrovector on Freepik',

    'flavor-text' => ['Declare the pennies on your eyes.'],
    'background' => \view('Mobster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/taxman.jpg)"  />
<x-card.phaserule type="Resolution" lines="2">
    <text >
<x-card.normalrule>Each player discards a card</x-card.normalrule><x-card.normalrule>from his hand or Library.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
