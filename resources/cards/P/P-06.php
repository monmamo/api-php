<?php

return [
    'name' => 'Duststorm',

    'concepts' => ['Environment', 'Weather'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>All players put their hands face down when this card is played.</x-card.ruleline>
<x-card.ruleline>While this card is in play, all hands remain facedown unless a rule of this card allows the player to view them. Any cards drawn during this phase must be placed facedown.</x-card.ruleline>
<x-card.ruleline>Upkeep phase: You may pick up 1d6 cards.</x-card.ruleline>
<x-card.ruleline>Resolution phase: You must put all but 1d4 cards face down.</x-card.ruleline>
</x-card.cardrule>
HTML
];
