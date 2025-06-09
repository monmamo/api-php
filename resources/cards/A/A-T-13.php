<?php

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
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.svg>{{ \view('Aquos.icon') }}</x-card.hero.svg>

            <x-card.phaserule type="Resolution" >
    <text >
<x-card.ruleline>If hit by an Attack that results in the</x-card.ruleline>
<x-card.ruleline>attacker discarding Water (A-001),</x-card.ruleline>
<x-card.ruleline>attach those cards to this Monster.</x-card.ruleline>
<x-card.ruleline class="smallrule">When those cards are discarded, they go </x-card.ruleline>
<x-card.ruleline class="smallrule">to the Discard of the player who owns them.</x-card.ruleline>
    </text>
</x-card.phaserule>
HTML;
        }
    };
