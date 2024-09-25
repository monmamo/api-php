<?php

return [
    'name' => 'Big-Box Store',

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Vendor.background') }}

'image-credit' => "Image by teravector on Freepik",


<x-card.flavortext>
    <x-card.flavortext.line>Expect more. Live better. Simplify life. Get more done.</x-card.flavortext.line>
</x-card.flavortext>
HTML,

    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A-014.jpg)" source="https://www.freepik.com/free-vector/express-truck-delivering-goods-supermarket_4147963.htm" />

        <x-card.concept.staticon type="Vendor" dx="2" />
        <x-card.concept.staticon type="Integrity" value="1d4" />


        <text y="500" filter="url(#solid)">
        <x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text>

<x-card.phaserule type="Draw" lines="4"><text>
                <x-card.normalrule>Discard three cards from your hand.</x-card.normalrule>
                <x-card.normalrule>Search your Library for two Item cards.</x-card.normalrule>
                <x-card.normalrule>Reveal them, then put them in your hand.</x-card.normalrule>
                <x-card.normalrule>Shuffle your library.</x-card.normalrule>
                </text></x-card.phaserule>

HTML
];
