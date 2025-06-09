<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Water Shield')]
#[Concept('Defense')]
#[Concept('Aquos')]
#[Concept('Level', 20)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.svg>{{ \view('Aquos.icon') }}</x-card.hero.svg>

            <x-card.phaserule type="Resolution" >
    <text >
<x-card.ruleline>For each Water (A-001) attached to</x-card.ruleline>
<x-card.ruleline>this Monster, prevent Boost @damage.</x-card.ruleline>
<x-card.ruleline>Discard all Water attached to this Monster</x-card.ruleline>
<x-card.ruleline class="smallrule">(even if they weren't needed to prevent damage).</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
