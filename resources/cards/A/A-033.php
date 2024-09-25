<?php

return [
    'name' => 'Wheel of Fortune',

    'concepts' => ['Draw'],

    'image-source' => 'https://www.freepik.com/free-psd/casino-roulette-icon-render_23877079.htm',

    'image-credit' => 'Image by freepik',

    'flavor-text' => ["This isn't a game (show)."],
    'background' => \view('Draw.background'),

    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/wheel-of-fortune.jpg)" />
<x-card.phaserule type="Draw" lines="2">
        <text >
        <x-card.normalrule>Each player puts his hand on the</x-card.normalrule>
<x-card.normalrule>bottom of his Library, then draws 7 cards.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];
