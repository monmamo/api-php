<?php

return [
    'name' => 'Cemetery',

    'concepts' => ['Place'],

    'image-prompt' => null,

    'image-source' => 'https://www.freepik.com/free-photo/composition-with-tombstones-hill_2816936.htm#fromView=search&page=1&position=5&uuid=975e765d-8c5f-44fd-9c44-5c9b77dd156e',

    'image-credit' => 'Image by freepik',

    'flavor-text' => ['Not for the faint of heart.'],
    'background' => \view('Place.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A029.jpg)"  />
<x-card.cardrule height="315" >
<x-card.ruleline class="smallrule"></x-card.ruleline>
<x-card.ruleline>Whenever any player attaches a Mana card</x-card.ruleline>
<x-card.ruleline>from their hand to one</x-card.ruleline>
<x-card.ruleline>of their Monsters, if the</x-card.ruleline>
<x-card.ruleline>Monster does not have Psychos or Gouros,</x-card.ruleline>
<x-card.ruleline>that Monster takes 4 @damage.</x-card.ruleline>
</x-card.cardrule>
HTML
];
