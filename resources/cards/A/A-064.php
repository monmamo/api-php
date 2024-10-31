<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Energy Shield')]
#[Concept('Defense')]
#[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
#[ConceptIconHeroImage('Energos')]
#[Prerequisites(lines: 'Requires Energos.', y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="4">
    <text >
<x-card.normalrule>For each Energy (A-003) attached to </x-card.normalrule>
<x-card.normalrule>this Monster, prevent 1d6 damage.</x-card.normalrule>
<x-card.normalrule>Discard all Energy attached to this Monster</x-card.normalrule>
<x-card.smallrule>(even if they weren't needed to prevent damage).</x-card.smallrule>
</text>
</x-card.phaserule>
HTML;
    }
};
