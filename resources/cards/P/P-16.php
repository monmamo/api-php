<?php

return [
    'name' => 'Rock Concert',

    'concepts' => ['Environment'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="95" >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule>Resolution phase: For each Skill that is declared for a Monster to use, roll 1d4. If @dieroll(1), the skill has no effect.</x-card.normalrule>
</x-card.cardrule>
HTML
];
