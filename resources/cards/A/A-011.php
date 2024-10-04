<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Flash of Lightning')]
    #[Concept('Skill')]
    #[ConceptIconHeroImage('Energos')]
    #[Prerequisites(lines: 'Requires Energos.', y: 430)]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="6"><text>
<x-card.normalrule>Discard all Electricity cards attached</x-card.normalrule>
    <x-card.normalrule>to this Monster. Each other Monster</x-card.normalrule>
    <x-card.normalrule>on the Battlefield takes 1d6 damage</x-card.normalrule>
    <x-card.normalrule>for each Electricity card discarded.</x-card.normalrule>
    <x-card.normalrule>Only this Monster may attack until &</x-card.normalrule>
    <x-card.normalrule>through this player’s next turn.</x-card.normalrule>
    </text></x-card.phaserule>
HTML;
        }
    };
