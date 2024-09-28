<?php

return [
    'name' => 'Cunning',

    'concepts' => ['Dandruff'],
'ai' => true,
    'image-prompt' => null,

    'image-credit' => '',

    'flavor-text' => [],
    'background' => \view('Trait.background'),
    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/dandruff.jpeg)" />
    <x-card.phaserule type="Resolution" height="135">
    <text>
<x-card.normalrule>When this Monster takes a physical attack, </x-card.normalrule>
<x-card.normalrule>the attacking Monster takes 1d6 damage.</x-card.normalrule>
</text>
    </x-card.phaserule>
</x-card>
