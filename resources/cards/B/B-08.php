<?php

return [
    'name' => 'Tsunami',

    'concepts' => ['Catastrophe'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Catastrophe.background'),
    'content' => <<<'HTML'

<text y="500">
<x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
<x-card.normalrule>If the Place card on the Battlefield is a Venue or Facility card, discard it.</x-card.normalrule>
<x-card.normalrule>Discard all Mobster and Bystander cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Discard all Item cards on the Battlefield.</x-card.normalrule>
    </text>
HTML
];
