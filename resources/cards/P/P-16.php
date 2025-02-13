<?php

return [
    'name' => 'Rock Concert',

    'concepts' => ['Environment'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'

<x-card.phaserule type="Resolution" height="140"><text>
<x-card.normalrule>For each Skill that is declared for a</x-card.normalrule>
<x-card.normalrule>Monster to use, roll 1d4.</x-card.normalrule>
<x-card.normalrule>If @dieroll(1), the skill has no effect.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
