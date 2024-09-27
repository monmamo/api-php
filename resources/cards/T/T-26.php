<?php
return [
'name' => "Leapfrogging",

'concepts' => ["Trait"],

'image-prompt' => "https://game-icons.net/1x1/delapouite/leapfrog.html",

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => null,
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="55" >
<x-card.normalrule>Dodge prevents all Ground damage.</x-card.normalrule>
</x-card.cardrule>
HTML
];
