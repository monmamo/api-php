<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Bolt of Lightning')]
#[Concept('Attack')]
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
<x-card.normalrule>Discard all Electricity (A-003) from the</x-card.normalrule>
<x-card.normalrule>attacking Monster. Roll 2d6 for each </x-card.normalrule>
<x-card.normalrule>Electricity discarded from this Monster. </x-card.normalrule>
<x-card.normalrule>The damage done is the sum of these rolls.</x-card.normalrule>
        </text>
        </x-card.phaserule>
HTML;
    }
};
