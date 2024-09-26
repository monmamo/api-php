<?php

return [
    'name' => 'Hot Desert',

    'concepts' => ['Place', 'Generic'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => ['A natural geographical area characterized by persistent high temperatures and a lack of precipitation.'],
    'background' => \view('Place.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML
];
