<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Water Shield')]
#[Concept('Defense')]
#[Concept('Level', 20)]
#[Prerequisites(lines: 'Requires Aquos.', y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.svg>{{ \view('Aquos.icon') }}</x-card.hero.svg>

            <x-card.phaserule type="Resolution" lines="4">
    <text >
<x-card.normalrule>For each Water (A-001) attached to</x-card.normalrule>
<x-card.normalrule>this Monster, prevent Boost @damage.</x-card.normalrule>
<x-card.normalrule>Discard all Water attached to this Monster</x-card.normalrule>
<x-card.smallrule>(even if they weren't needed to prevent damage).</x-card.smallrule>
</text>
</x-card.phaserule>
HTML;
    }
};
