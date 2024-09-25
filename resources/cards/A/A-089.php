<?php

return [
    'name' => 'Spy Drone',

    'concepts' => ['Drone', 'Item', 'DamageCapacity:5', 'Level:5', 'Size:5', 'Speed:20'],

    'image-prompt' => null,

    'image-credit' => 'Image by catalyststuff on Freepik',

    'flavor-text' => ["Here's lookin' at you, kid."],
    'background' => \view('Drone.background'),
    'content' => <<<'HTML'
<image class="hero" href="@local(A312.jpg)" />
<x-card.phaserule type="Upkeep" lines="3"><text>
    <x-card.normalrule>You may ask one opponent</x-card.normalrule>
    <x-card.normalrule>to show you their hand.</x-card.normalrule>
    <x-card.normalrule>(Only you get to see the hand.)</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
