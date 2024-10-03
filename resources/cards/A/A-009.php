<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Sparking')]
    #[Concept('Trait')]
    #[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
       <g class="svg-hero"><?= view('Energos.icon') ?></g>

    <text  y="450"  filter="url(#solid)">
        <x-card.normalrule>Requires Energos.</x-card.normalrule>
    </text>

    <x-card.phaserule y="500" type="Command" lines="2"><text>
        <x-card.normalrule>You may discard any number of</x-card.normalrule>
        <x-card.normalrule>Electricity cards from this Monster.</x-card.normalrule>
    </text></x-card.phaserule>

        <x-card.phaserule type="Resolution" lines="3"><text>
        <x-card.normalrule>For each Electricity card discarded,</x-card.normalrule>
        <x-card.normalrule>the attacking or defending Monster</x-card.normalrule>
        <x-card.normalrule>takes 1d6 damage.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
