<?php

return [
    'name' => 'Charisma',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => null,
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="55" >
<x-card.normalrule>Resolution phase:: If this Monster attacks and the targeted Monster uses a Defense, reduce the damage prevented by 1d6.</x-card.normalrule>
</x-card.cardrule>
HTML
];
