<?php

return [
    'name' => 'Trial and Error',

    'concepts' => [],

    'image-prompt' => null,

    'image-credit' => '',

    'flavor-text' => ['Mostly error.'],
    'background' => \view('Upkeep.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<text y="500" filter="url(#solid)">
        <x-card.smallrule>Put this card on the Battlefield.</x-card.smallrule>
</text>

<x-card.phaserule type="Resolution" :lines="3">
    <text >
<x-card.normalrule>You may redo any attack or defense once.</x-card.normalrule>
<x-card.normalrule>If so, you must keep the result.</x-card.normalrule>
<x-card.normalrule>If the result improves, discard this card.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
