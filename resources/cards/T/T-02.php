<?php
return [
'name' => "Gelatinous Flesh",

'concepts' => ["Trait"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => null,
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML
];