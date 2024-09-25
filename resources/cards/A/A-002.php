<?php

return [
    'name' => 'Make It Rain',

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Draw.background') }}
<x-card.flavortext>
<x-card.flavortext.line>Who says money can't buy popularity?</x-card.flavortext.line>
</x-card.flavortext>
'image-credit' => "Image by wirestock on Freepik",

HTML,

    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A-002.jpg)" source="https://www.freepik.com/free-photo/throwing-money-air-being-happy_10978858.htm" />

    
<x-card.concept.staticon type="Draw"  />

<x-card.phaserule type="Draw" lines="1"><text>
    <x-card.normalrule>Every player may draw up to 5 cards.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
