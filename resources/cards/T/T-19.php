<?php
return [
'name' => "Fetor",

'concepts' => ["Trait"],

'image-prompt' => "https://www.freepik.com/free-vector/boy-with-bad-breath-cartoon-character_19734647.htm#fromView=search&page=1&position=18&uuid=b8d1044b-7fd0-4b95-b59a-32d51461ba3f",

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => null,
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="330" >
<x-card.normalrule>Fetor Strength: 1d6</x-card.normalrule>
<x-card.normalrule>(rolled at attach; can be increased by Power Up)</x-card.normalrule>
<x-card.normalrule>Reduce damage done by any</x-card.normalrule>
<x-card.normalrule>Monsters' Attacks by Fetor Strength.</x-card.normalrule>
<x-card.normalrule>Reduce damage prevented by any</x-card.normalrule>
<x-card.normalrule>Monsters' Defenses by Fetor Strength.</x-card.normalrule>
</x-card.cardrule>
HTML
];
