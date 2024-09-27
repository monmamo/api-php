<?php

return [
    'name' => 'Intimidation',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => null,
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="55" >
<x-card.normalrule>Resolution phase: This Monster cannot use any Defenses, but prevents 1dSize damage if not Paralyzed, Hypnotized or Asleep.</x-card.normalrule>
</x-card.cardrule>
HTML
];
