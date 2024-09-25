<?php
return [
'name' => "Rabies",

'concepts' => ["Bane"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => view('Bane.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="0" >TODO</x-card.cardrule>
HTML
];
