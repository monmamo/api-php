<?php

return [
    'name' => 'Insurance',

    'concepts' => [],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],

    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="245" >
<x-card.smallrule>Put this card on the Battlefield before</x-card.smallrule>
<x-card.smallrule>a Catastrophe card is played.</x-card.smallrule>
<x-card.normalrule>When a Catastrophe card is played,</x-card.normalrule>
<x-card.normalrule>you may shuffle all or part of your</x-card.normalrule>
<x-card.normalrule>Discard into your Library.</x-card.normalrule>
</x-card.cardrule>
HTML
];
