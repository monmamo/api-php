<?php

return [
    'name' => 'Big-Box Store',
'concepts' => ['Vendor', 'Integrity:1d4'],
    'image-prompt' => null,

    'background' => view('Vendor.background'),

'image-credit' => "Image by teravector on Freepik",
'flavor-text' => 'Expect more. Live better. Simplify life. Get more done.',

    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A-014.jpg)" source="https://www.freepik.com/free-vector/express-truck-delivering-goods-supermarket_4147963.htm" />

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
