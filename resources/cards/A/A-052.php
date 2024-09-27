<?php

return [
    'name' => 'Deathgrip',

    'concepts' => ['Attack', 'Physical'],

    'image-prompt' => null,

    'image-credit' => null, //"Image by USER_NAME on SERVICE",

    'flavor-text' => [],
    'background' => null,
    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(TODO.png)" />

        <x-card.phaserule type="Resolution" height="210">
<text>
<x-card.normalrule>Does Multiplier x d4 damage.</x-card.normalrule>
<x-card.normalrule>If the Defender's Defense fails to prevent all</x-card.normalrule>
<x-card.normalrule>damage, it has no effect. The Defending</x-card.normalrule>
<x-card.normalrule>Monster can no longer use Defenses</x-card.normalrule>
<x-card.normalrule>while this Monster uses Deathgrip on it.        </x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
