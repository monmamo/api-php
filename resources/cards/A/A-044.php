<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[ConceptIconHeroImage('Pyros')]
#[ImageCredit('Icon by Carl Olsen on Game-Icons.net under CC BY 3.0')]
#[Concept('Defense')]
#[Title('Fire Shield')]
#[Prerequisites(lines: 'Requires Pyros.', y: 460)]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="4">
    <text >
<x-card.normalrule>For each Fire card attached to this </x-card.normalrule>
<x-card.normalrule>Monster, prevent 1d6 damage. Discard</x-card.normalrule>
<x-card.normalrule>all Fire cards attached to this Monster</x-card.normalrule>
<x-card.smallrule>(even if they weren't needed to prevent damage).</x-card.smallrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
