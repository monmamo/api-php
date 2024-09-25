<?php

return [
    'name' => 'Basic Lure',

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Draw.background') }}

'image-credit' => "Image by Lorc on Game-Icons.net under CC BY 3.0",

HTML,

    // https://game-icons.net/1x1/lorc/gift-trap.html

    'content' => <<<'HTML'
<x-card.concept.staticon type="Draw" :dx="3" />
<x-card.concept.staticon type="Item"  />
<x-card.concept.staticon type="Lure"  />

<x-card.phaserule type="Resolution" lines="5"><text>
    <x-card.normalrule>Roll 1d6.</x-card.normalrule>
    <x-card.normalrule>If @dieroll(1,2,3), you may search your Library </x-card.normalrule>
    <x-card.normalrule>for a Monster card. </x-card.normalrule>
    <x-card.normalrule>Reveal that/those card(s). </x-card.normalrule>
    <x-card.normalrule>Put that/those card(s) in your hand.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
