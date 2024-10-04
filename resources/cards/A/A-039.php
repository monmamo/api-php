<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Concept('Trait')]
#[\App\CardAttributes\Prerequisites(lines:'Requires Aquos.',y:400)]
#[Title('Absorb Water')]
#[\App\CardAttributes\ConceptIconHeroImage('Aquos')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'

<x-card.phaserule type="Resolution" height="175">
    <text >
<x-card.normalrule>If hit by an Attack that results in </x-card.normalrule>
<x-card.normalrule>the attacker discarding Water, </x-card.normalrule>
<x-card.normalrule>attach those cards to this Monster.</x-card.normalrule>
<x-card.smallrule>When those cards are discarded, they go </x-card.smallrule>
<x-card.smallrule>to the Discard of the player who owns them.</x-card.smallrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
