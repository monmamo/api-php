<?php

return [
    'name' => 'Hailstorm',

    'concepts' => ['Catastrophe'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Catastrophe.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<text y="500" filter="url(#solid)">
<x-card.normalrule>Discard all Mobster and Bystander cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Discard all Item cards on the Battlefield.</x-card.normalrule>
</text>
HTML
];
