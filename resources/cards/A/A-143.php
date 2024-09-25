<?php

return [
    'name' => 'Financial Planner',

    'concepts' => ['Vendor'],

    'image-prompt' => null,

    'image-credit' => 'Image by photoroyalty on Freepik',
    'image-source' => 'https://www.freepik.com/free-vector/time-is-money-background_1014317.htm',

    'flavor-text' => [],
    'background' => \view('Vendor.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A135.jpg)"  />
<x-card.phaserule type="Draw" lines="3" badge="Repeat">
    <text >
<x-card.normalrule>Shuffle 1d4 discarded cards </x-card.normalrule>
<x-card.normalrule>into your Library.</x-card.normalrule>
<x-card.normalrule>You may take another Draw phase.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];
