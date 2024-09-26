<?php

return [
    'name' => 'Inappropriate Traffic Stop',

    'concepts' => ['Draw'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => ['Also called "airport security."'],
    'background' => \view('Draw.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.phaserule type="Draw" lines="4"><text>    
<x-card.normalrule>Look at the top 5 cards of any Library.</x-card.normalrule>
<x-card.normalrule>Discard any number of Item cards you find</x-card.normalrule>
<x-card.normalrule>there. The owner of the Library shuffles</x-card.normalrule>
<x-card.normalrule>the other cards back into their deck.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
