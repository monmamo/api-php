<?php

return [
    'name' => 'Biolure',

    'concepts' => ['Trait', 'Lure'],

    'image-prompt' => null,

    'image-credit' => '',

    'flavor-text' => [],
    'background' => \view('Trait.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="130" >
<x-card.normalrule>When not your turn, roll 1d6 for each Monster </x-card.normalrule>
<x-card.normalrule>on the Battlefield until you get @dieroll(5) or @dieroll(6). </x-card.normalrule>
<x-card.normalrule>The selected Monster cannot attack </x-card.normalrule>
<x-card.normalrule>any other Monster on this turn.</x-card.normalrule>
</x-card.cardrule>
HTML
];
