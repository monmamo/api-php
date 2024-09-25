<?php

return [
    'name' => 'Investment',

    'concepts' => ['Draw'],

    'image-prompt' => null,
    'image-source' => 'https://www.freepik.com/free-vector/time-is-money-background_1014317.htm',
    'image-credit' => 'Image by photoroyalty on Freepik',

    'flavor-text' => ['Past performance is not indicative of future results.'],
    'background' => \view('Draw.background'),
    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A135.jpg)" /> 
    
    <x-card.phaserule type="Draw" y="610" lines="2"><text>
            <x-card.normalrule>Put any number of cards </x-card.normalrule>
                <x-card.normalrule>facedown on the Battlefield.</x-card.normalrule>
        </text></x-card.phaserule>

        <x-card.phaserule type="Resolution" lines="2"><text>
            <x-card.normalrule>Draw 1d6-1 cards for each facedown</x-card.normalrule>
            <x-card.normalrule>card. Discard the facedown cards.</x-card.normalrule>
        </text></x-card.phaserule>

HTML
];
