<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Flash of Lightning')]
    #[Concept('Skill')]
    #[Prerequisites(lines: 'Requires Energos.', y: 430)]
    #[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg>{{ \view('Energos.icon') }}</x-card.hero.svg>

            <x-card.phaserule type="Resolution" lines="6"><text>
<x-card.normalrule>Discard all Electricity (A-003)</x-card.normalrule>
    <x-card.normalrule>attached to this Monster. Each other</x-card.normalrule>
    <x-card.normalrule>Monster on the Battlefield takes</x-card.normalrule>
    <x-card.normalrule>3 @damage for each Electricity discarded.</x-card.normalrule>
    <x-card.normalrule>Only this Monster may attack until &</x-card.normalrule>
    <x-card.normalrule>through this player’s next turn.</x-card.normalrule>
    </text></x-card.phaserule>
HTML;
        }
    };
