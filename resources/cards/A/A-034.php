<?php

return [
    'name' => 'Gene Pool',

    'concepts' => ['Setup'],

    'image-prompt' => null,

    'image-credit' => 'Image by freepik',

    'flavor-text' => [],
    'background' => \view('Setup.background'),
    'content' => <<<'HTML'
<image x="-75" y="0" href="@local(hero/gene-pool.jpg)" source="https://www.freepik.com/free-photo/dna-representation-concept_44999157.htm" />
<x-card.phaserule type="Setup" lines="3">
        <text >
<x-card.normalrule>Attach a Trait card to a Monster</x-card.normalrule>
<x-card.normalrule>from your hand, Library or Discard.</x-card.normalrule>
<x-card.normalrule>You may play another card on this turn.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];
