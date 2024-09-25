<?php

return [
    'name' => 'Sparking',

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Trait.background') }}
'image-credit' => "Image by Lorc on Game-Icons.net under CC BY 3.0",

HTML,

    'content' => <<<'HTML'
  <g class="svg-hero"><?= view('Energos.icon') ?></g>
    
    <x-card.concept.staticon type="Trait" />


    <text  y="500"  filter="url(#solid)">
        <x-card.normalrule>Requires Energos.</x-card.normalrule>
    </text>


    <x-card.phaserule y="580" type="Command" lines="2"><text>
        <x-card.normalrule>You may discard any</x-card.normalrule>
        <x-card.normalrule>number of Electricity cards from this Monster.</x-card.normalrule>
    </text></x-card.phaserule>

        <x-card.phaserule type="Resolution" lines="3"><text>
        <x-card.normalrule>For each Electricity card discarded,</x-card.normalrule>
        <x-card.normalrule>the attacking or defending Monster</x-card.normalrule>
        <x-card.normalrule>takes 1d6 damage.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
