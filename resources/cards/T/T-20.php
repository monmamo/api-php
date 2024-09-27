<?php
return [
'name' => "Fragrance",

'concepts' => ["Trait"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => null,
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="330" >
<x-card.normalrule>Fragrance Strength: 1d6</x-card.normalrule>
<x-card.normalrule>(rolled at attach; can be increased by Power Up)</x-card.normalrule>
<x-card.normalrule>Reduce damage done by any</x-card.normalrule>
<x-card.normalrule>Monsters' Attacks by Fragrance Strength.</x-card.normalrule>
<x-card.normalrule>Reduce damage prevented by any</x-card.normalrule>
<x-card.normalrule>Monsters' Defenses by Fragrance Strength.</x-card.normalrule>
</x-card.cardrule>
HTML
];