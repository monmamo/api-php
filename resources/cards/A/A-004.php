<?php

return [
    'name' => 'Alms for the Poor',

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Draw.background') }}

<x-card.flavortext>
    <x-card.flavortext.line>Pay it forward even when it isn't cool.</x-card.flavortext.line>
</x-card.flavortext>

'image-credit' => "Image by freepik",

HTML,

    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A004.jpg)" source="https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm" />
    
    <x-card.concept.staticon type="Draw"  />

    <text y="585" filter="url(#solid)">
        <x-card.normalrule>To play this card, there must be at least 1</x-card.normalrule>
        <x-card.normalrule>opponent with 0 or 1 cards in their hand.</x-card.normalrule>
    </text>

    <x-card.phaserule type="Draw" lines="3"><text>
        <x-card.normalrule>Each of these players can draw 1 card.</x-card.normalrule>
        <x-card.normalrule>Once they have done so,</x-card.normalrule>
        <x-card.normalrule>you may draw up to 3 cards.</x-card.normalrule>
    </text></x-card.phaserule>
HTML
];
