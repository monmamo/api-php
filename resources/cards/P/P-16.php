<?php

return [
    'name' => 'Rock Concert',

    'concepts' => ['Environment'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'
<x-card.phaserule type="Resolution" ><text>
<x-card.ruleline>For each Skill that is declared for a</x-card.ruleline>
<x-card.ruleline>Monster to use, roll 1d4.</x-card.ruleline>
<x-card.ruleline>If @dieroll(1), the skill has no effect.</x-card.ruleline>
</text></x-card.phaserule>
HTML
];
