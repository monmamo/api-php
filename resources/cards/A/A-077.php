<?php

return [
    'name' => 'Round for the House',

    'concepts' => ['Draw'],

    'image-prompt' => null,

    'image-credit' => 'Image by freepic.diller on Freepik',

    'flavor-text' => ['Your favorite monster sports club had a great day', "on the field. Let's celebrate!"],
    'background' => \view('Draw.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A231.jpg)" />
<x-card.phaserule type="Draw" :lines="3">
  <text >
  <x-card.normalrule>Each player, including you,</x-card.normalrule>
<x-card.normalrule>may choose to draw a card.</x-card.normalrule>
<x-card.normalrule>Then you may take another Draw phase.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
