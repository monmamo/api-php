<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Water Pulse')]
#[Concept('Trait')]
#[Concept('Cost', 3)]
#[Prerequisites(lines: ['Requires Aquos.', 'Use when this Monster attacks or defends.'], y: 400)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.svg>{{ \view('Aquos.icon') }}</x-card.hero.svg>

            <x-card.phaserule type="Resolution" >
    <text >
<x-card.ruleline>When resolving, discard 1d6 Water</x-card.ruleline>
<x-card.ruleline>(A-001) from this Monster. The</x-card.ruleline>
<x-card.ruleline>defending/attacking Monster takes Boost @damage</x-card.ruleline>
<x-card.ruleline>for each Water actually discarded.</x-card.ruleline>
    </text>
    </x-card.phaserule>
HTML;
    }
};
