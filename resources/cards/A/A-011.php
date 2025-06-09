<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Flash of Lightning')]
    #[Concept('Skill')]
    #[ImageCredit('Icon by Lorc on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg>{{ \view('Energos.icon') }}</x-card.hero.svg>

<x-card.cardrule y="470"  >
<x-card.ruleline>Requires Energos.</x-card.ruleline>
</x-card.cardrule>

            <x-card.phaserule type="Resolution" lines="6"><text>
<x-card.ruleline>Discard all Electricity (A-003)</x-card.ruleline>
    <x-card.ruleline>attached to this Monster. Each other</x-card.ruleline>
    <x-card.ruleline>Monster on the Battlefield takes</x-card.ruleline>
    <x-card.ruleline>3 @damage for each Electricity discarded.</x-card.ruleline>
    <x-card.ruleline>Only this Monster may attack until &amp;</x-card.ruleline>
    <x-card.ruleline>through this player’s next turn.</x-card.ruleline>
    </text></x-card.phaserule>
HTML;
        }
    };
