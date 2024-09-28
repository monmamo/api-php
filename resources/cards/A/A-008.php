<?php

return [
    'name' => 'Bagman',
    'concepts' => ['Vendor', 'Integrity:3'],
    'ai' => true,
    'image-prompt' => 'dark man in a mask wearing a trenchcoat carrying a large tote bag',
    'flavor-text' => [
        'Just collecting the dues.'
    ],

    'background' => <<<'HTML'
<image x="0" y="0" href="@local(A-008-full.png)" />
HTML,

    'content' => <<<'HTML'

            <text y="500" filter="url(#solid)">
                <x-card.normalrule>You may play this card only if you have a</x-card.normalrule>
                <x-card.normalrule>Mobster card on the Battlefield.</x-card.normalrule>
            </text>

            <x-card.phaserule type="Draw" lines="5"><text>
                <x-card.normalrule>Choose one opponent. Roll 1d6. That</x-card.normalrule>
                <x-card.normalrule>opponent discards that many cards from his</x-card.normalrule>
                <x-card.normalrule>Library or all if he doesn't have that many.</x-card.normalrule>
                <x-card.normalrule>you may draw as many cards</x-card.normalrule> 
                    <x-card.normalrule>as were discarded.</x-card.normalrule>
            </text></x-card.phaserule>
HTML
];
