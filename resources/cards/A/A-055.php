<?php

return [
    'name' => 'Defensive Coordinator',

    'concepts' => ['Bystander', 'Coach', 'Male', 'Integrity:1d6'],
    'ai' => true,
    'image-prompt' => null,
    'image-null' => null,

    'flavor-text' => [],
    'background' => \view('Bystander.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A-055.png)"  />

<text y="575" filter="url(#solid)">
<x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
<x-card.smallrule>You must already have a Head Coach on the Battlefield</x-card.smallrule>
<x-card.smallrule>to put this card on the Battlefield.</x-card.smallrule>
<x-card.smallrule>You may choose to make this card Female</x-card.smallrule>
<x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
<x-card.normalrule>You may put the Defense cards you use</x-card.normalrule>
<x-card.normalrule>at the bottom of your Library.</x-card.normalrule>
</text>
HTML
];
