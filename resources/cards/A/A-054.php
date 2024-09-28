<?php

return [
    'name' => 'Deception',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'image-credit' => '',

    'flavor-text' => [],
    'background' => \view('Trait.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.phaserule type="Resolution" y="135" height="135">
    <text >
<x-card.normalrule>If this Monster uses </x-card.normalrule>
<x-card.normalrule>a Defense, add 4 to any roll.</x-card.normalrule>
<x-card.normalrule>(For example, 1d6 becomes 1d10.)</x-card.normalrule>
    </text>
</x-card.phaserule>
</x-card.phaserule>
HTML
];