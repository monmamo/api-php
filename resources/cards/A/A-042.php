<?php

// inspiration Copycat PTCG card https://bulbapedia.bulbagarden.net/wiki/Copycat_(Raichu_Half_Deck_21)
return [
    'name' => 'Copycat',

    'concepts' => ['Draw'],

    'image-prompt' => null,

    'image-credit' => null,

    'flavor-text' => ['Bears a striking resemblance to Frank Abagnale.'],
    'background' => \view('Draw.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.phaserule type="Resolution" height="135">
<text >
<x-card.normalrule>Shuffle your hand into your deck. </x-card.normalrule>
<x-card.normalrule>Choose another player. Count the number </x-card.normalrule>
<x-card.normalrule>of cards in his hand. Draw that many cards.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
