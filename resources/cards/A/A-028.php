<?php

return [
    'name' => 'Caffeine',

    'credit-color' => '#000000',

    'concepts' => ['Mana'],

    'image-prompt' => 'cup of coffee',

    'image-credit' => 'Image by macrovector on Freepik',

    'flavor-text-color' => '#000000',

    'flavor-text' => 'Because both adulting and monster battling are hard.',
    'background' => <<<'HTML'
<image x="0" y="0" href="@local(A028-full.jpg)" source="https://www.freepik.com/free-vector/realistic-cup-black-brewed-coffee-saucer-vector-illustration_23128948.htm" />
HTML,

    'content' => <<<'HTML'
<x-card.cardrule height="200" background-opacity="0" >
<x-card.normalrule>For any attempt to put this Monster to Sleep,</x-card.normalrule>
<x-card.normalrule>roll 1d6. (Roll one die for each</x-card.normalrule>
<x-card.normalrule>Caffeine card attached to this Monster.)</x-card.normalrule>
<x-card.normalrule>@dieroll(5,6) The Monster remains awake.</x-card.normalrule>
<x-card.normalrule>@dieroll(1,2) Discard this card.</x-card.normalrule>
</x-card.cardrule>
HTML
];
