<?php

return [
    'name' => 'Creepy Guy in the Alley',

    'concepts' => ['Vendor', 'Integrity'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => ['Psst. I got a great deal for you.'],
    'background' => \view('Vendor.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="150" >
<x-card.normalrule>Draw two cards</x-card.normalrule>
<x-card.normalrule>from the bottom of your Library.</x-card.normalrule>
</x-card.cardrule>
HTML
];
