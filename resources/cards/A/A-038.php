<?php

return [
    'name' => 'Body Block',

    'concepts' => ['Defense', 'Physical'],

    'image-prompt' => null,

    'image-credit' => 'Image by Freepik',

    'flavor-text' => [],
    'background' => \view('Defense.background'),
    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(AS02.jpg)" source="https://www.freepik.com/free-vector/jiu-jitsu-athletes-fighting_10369936.htm"/>
    <x-card.phaserule type="Resolution" lines="1">
    <text >
        <x-card.normalrule>Prevent Size÷2 damage (rounded up).</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
