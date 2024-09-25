<?php

return [
    'name' => 'Recycle',

    'concepts' => ['Draw'],

    'image-prompt' => null,
    'image-source' => 'https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm',
    'image-credit' => 'Image by logturnal on Freepik',

    'flavor-text' => ['Recycle today for a better upkeep phase tomorrow.'],
    'background' => \view('Draw.background'),
    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A212.jpg)" />
    <x-card.phaserule type="Draw" :lines="2">
  <text >
<x-card.normalrule>Put a card from your Discard</x-card.normalrule>
<x-card.normalrule>pile into your hand.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
