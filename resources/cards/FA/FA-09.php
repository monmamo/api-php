<?php

return [
    'name' => 'Canned Monster Food',

    'concepts' => ['Item', 'Food'],

    'image-prompt' => 'A can of meaty chunks in a thick, savory gravy.',

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => ['Meaty chunks in a thick, savory gravy.'],
    'background' => \view('Item.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="0" >
"Upkeep phase: Attach Monstermeal to a Monster that is not Knocked Out.",
"Declaration phase: This Monster may not attack or be attacked during this turn.",
"Resolution phase: Discard this card. Remove 1d10-1d4 damage from this Monster."
</x-card.cardrule>
HTML
];
