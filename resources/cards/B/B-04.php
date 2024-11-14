<?php

return [
    'name' => 'Sunken Eye',

    'concepts' => ['Bane'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Bane.background'),
    'content' => <<<'HTML'

<text y="500">
<x-card.normalrule>You may play this Bane only with an Attack.</x-card.normalrule>
    <x-card.normalrule>Limit 2 per Monster.</x-card.normalrule>
</text>

<x-card.phaserule type="Resolution" height="135">
<text >
TODO
</text>
</x-card.phaserule>
HTML
];
