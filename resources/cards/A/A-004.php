<?php

return [
    'name' => 'Alms for the Poor',
    'concepts' => ['Draw'],
    'image-prompt' => null,
    'flavor-text' => 'Pay it forward even when it isn\'t cool.',
    'background' => view('Draw.background'),
    'image-credit' => "Image by freepik",

    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A004.jpg)" source="https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm" />

    <x-card.phaserule type="Draw" lines="4"><text>
        <x-card.normalrule>The player with the fewest cards</x-card.normalrule> 
        <x-card.normalrule>in their hand can draw 1 card.</x-card.normalrule>
        <x-card.normalrule>Once they have done so,</x-card.normalrule>
        <x-card.normalrule>you may draw up to 3 cards.</x-card.normalrule>
    </text></x-card.phaserule>
HTML
];
