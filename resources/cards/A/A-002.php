<?php

return [
    'name' => 'Make It Rain',
    'concepts' => ['Draw'],
    'image-prompt' => null,

    'image-credit' => "Image by wirestock on Freepik",
    'flavor-text' => 'Who says money can\'t buy popularity?',
    'background' =>  view('Draw.background'),

    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A-002.jpg)" source="https://www.freepik.com/free-photo/throwing-money-air-being-happy_10978858.htm" />

<x-card.phaserule type="Draw" lines="1"><text>
    <x-card.normalrule>Every player may draw up to 5 cards.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
