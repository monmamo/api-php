<?php

return [
    'name' => 'Sheriff',

    'concepts' => ['Bystander', 'Integrity:2d6'],
    'ai' => true,
    'image-prompt' => 'female high-ranking law enforcement official',

    // 'image-credit' =>null,

    'flavor-text' => ['I am the law.'],
    'background' => \view('Bystander.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A245.png)"  />
<x-card.cardrule height="270" >
<x-card.smallrule>{{ trans_choice('rules.battlefield-limit',1) }}</x-card.smallrule>
<x-card.smallrule>You may choose to make this card Male or Female </x-card.smallrule>
<x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
<x-card.normalrule>Discard all Mobster and Criminal cards</x-card.normalrule>
<x-card.normalrule>on the Battlefield.</x-card.normalrule>
<x-card.normalrule>No more Mobster or Criminal cards </x-card.normalrule>
<x-card.normalrule>can be placed on the Battlefield.</x-card.normalrule>
</x-card.cardrule>
HTML
];
