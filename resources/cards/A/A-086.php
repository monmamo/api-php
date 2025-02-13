<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Water Pulse')]
#[Concept('Trait')]
#[ConceptIconHeroImage('Aquos')]
#[Prerequisites(lines: ['Requires Aquos.', 'Use when this Monster attacks or defends.'], y: 400)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="4">
    <text >
<x-card.normalrule>When resolving, discard 1d6 Water</x-card.normalrule>
<x-card.normalrule>(A-001) from this Monster. The</x-card.normalrule>
<x-card.normalrule>defending/attacking Monster takes Boost @damage</x-card.normalrule>
<x-card.normalrule>for each Water actually discarded.</x-card.normalrule>
    </text>
    </x-card.phaserule>
HTML;
    }
};
