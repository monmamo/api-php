<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Concept('Trait')]
#[Prerequisites(lines: 'Requires Aquos.', y: 400)]
#[Title('Absorb Water')]
#[Concept('Cost', 2)]
#[ConceptIconHeroImage('Aquos')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" height="190">
    <text >
<x-card.normalrule>If hit by an Attack that results in the</x-card.normalrule>
<x-card.normalrule>attacker discarding Water (A-001),</x-card.normalrule>
<x-card.normalrule>attach those cards to this Monster.</x-card.normalrule>
<x-card.smallrule>When those cards are discarded, they go </x-card.smallrule>
<x-card.smallrule>to the Discard of the player who owns them.</x-card.smallrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
