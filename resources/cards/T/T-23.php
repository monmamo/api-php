<?php
return [
'name' => "Pygmos",

'concepts' => ["Trait"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => null,
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="55" >
<x-card.normalrule>Size/2, Speed x2</x-card.normalrule>
</x-card.cardrule>
HTML
];