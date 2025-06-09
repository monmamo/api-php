<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Bolt of Lightning')]
#[Concept('Attack')]
#[Concept('Level', 15)]
#[ImageCredit('Icon by Lorc on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.svg>{{ \view('Energos.icon') }}</x-card.hero.svg>

            <x-card.cardrule y="515"  >
<x-card.ruleline>Requires Energos.</x-card.ruleline>
</x-card.cardrule>


            <x-card.phaserule type="Resolution" >
    <text >
<x-card.ruleline x="55%">Discard all Electricity (A-003) from the</x-card.ruleline>
<x-card.ruleline>attacking Monster. Roll 1d6 for each</x-card.ruleline>
<x-card.ruleline>Electricity discarded.</x-card.ruleline>
<x-card.ruleline>The damage done is the sum of these rolls.</x-card.ruleline>
        </text>
        </x-card.phaserule>
HTML;
    }
};
