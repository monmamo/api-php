<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Energy Shield')]
#[Concept('Defense')]
#[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
#[\App\CardAttributes\ConceptIconHeroImage('Energos')]
#[\App\CardAttributes\Prerequisites(lines:'Requires Energos.',y:460)]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="4">
    <text >
<x-card.normalrule>For each Energy card attached to this </x-card.normalrule>
<x-card.normalrule>Monster, prevent 1d6 damage. Discard</x-card.normalrule>
<x-card.normalrule>all Energy cards attached to this Monster</x-card.normalrule>
<x-card.smallrule>(even if they weren't needed to prevent damage).</x-card.smallrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
        