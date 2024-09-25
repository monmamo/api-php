<?php

return [
    'name' => 'Head Coach',

    'concepts' => ['Master', 'Coach', 'Male', 'Integrity:2d6'],
    'ai' => true,
    'image-prompt' => null,
    'image-null' => null,

    'flavor-text' => [],
    'background' => \view('Bystander.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A-055.png)"  />

<text y="500" filter="url(#solid)">
        <x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
<x-card.smallrule>You may choose to make this card Female </x-card.smallrule>
    <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
    </text>

    <x-card.phaserule type="Resolution" :lines="5">
        <text >
<x-card.normalrule>Your Monsters' attacks</x-card.normalrule>
<x-card.normalrule>do 1d6 more damage and</x-card.normalrule>
<x-card.normalrule>defenses prevent 1d6 more damage.</x-card.normalrule>
<x-card.normalrule>You may put the Skill cards you use</x-card.normalrule>
<x-card.normalrule>at the bottom of your Library.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
