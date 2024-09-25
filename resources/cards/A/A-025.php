<?php

return [
    'name' => 'Busybody',

    'concepts' => ['Draw'],

    'image-prompt' => null,

    'image-credit' => 'Image by Adobe: Stock #58908676',

    'background' => \view('Draw.background'),

    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A025.jpeg)" />
<x-card.phaserule type="Draw" lines="4">
<text >
<x-card.normalrule>Choose an opponent. That opponent</x-card.normalrule>
    <x-card.normalrule>reveals their hand. Choose one card.</x-card.normalrule>
    <x-card.normalrule>The opponent puts that card</x-card.normalrule>
    <x-card.normalrule>on the bottom of their Library.</x-card.normalrule>
</text></x-card.phaserule>

HTML
];
