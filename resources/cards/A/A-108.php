<?php

return [
    'name' => 'Grab Bag',

    'concepts' => ['Draw'],

    'image-prompt' => null,

    'image-credit' => 'Shutterstock #2348597925',

    'flavor-text' => [],
    'background' => \view('Draw.background'),
    'content' => <<<'HTML'
  <image x="0" y="0" class="hero" href="@local(A108.jpg)" />
  <x-card.phaserule type="Draw"  height="160"><text >   
  <x-card.normalrule>Reveal the top 7 cards of your Library.</x-card.normalrule>
<x-card.normalrule>You may put any Item cards in your hand.</x-card.normalrule>
<x-card.normalrule>Discard the rest.</x-card.normalrule>
<x-card.normalrule>Then discard this card.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
