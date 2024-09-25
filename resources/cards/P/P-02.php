<?php
return [
'name' => "Bathhouse",

'concepts' => ["Facility","Generic"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => view('Facility.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="0" >
<x-card.normalrule>Resolution phase: Reduce damage done by Attacks by 4.</x-card.normalrule>
</x-card.cardrule>
HTML
];
