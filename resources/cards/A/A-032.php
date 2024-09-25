<?php

return [
    'name' => 'Cheerleader',

    'concepts' => ['Bystander', 'Female', 'Cumulative', 'Integrity:1d4'],

    'image-prompt' => null,

    'image-credit' => 'Image by freepik',

    'flavor-text' => ['Go, go, go team go!'],

    'background' => \view('Bystander.background'),

    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A032.jpg)" source="https://www.freepik.com/free-vector/hand-drawn-cheerleader-cartoon-illustration_74884680.htm#fromView=image_search_similar&page=1&position=0&uuid=c5c5f2c3-37ff-4227-956f-33c0b507b00c"/>

<text y="500" filter="url(#solid)">
    <x-card.smallrule>A player may have any number of Cheerleaders on the Battlefield.</x-card.smallrule>
    <x-card.smallrule>You may choose to make this card Male</x-card.smallrule>
    <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
</text>

    <x-card.phaserule type="Resolution" height="100">
        <text >
    <x-card.normalrule>Your Monster’s Attacks</x-card.normalrule>
        <x-card.normalrule>do an additional 1d4 damage.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];
