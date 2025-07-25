<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// This is a small low-level monster whose purpose is to slow down (not necessarily stop) any intruder.

return new
#[Title('Patrol Monster')]
#[Concept('Monster')]
#[Concept('Level', 25)]
#[Concept('DamageCapacity', 10)]
#[Concept('Size', 4)]
#[Concept('Speed', 2)]
#[Concept('Boost', '1')]
#[ImageCredit('Generated image')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>hero/A-M-22.jpeg</x-card.hero.local>

<x-card.taxons>Canos</x-card.taxons>

<x-card.cardrule  >
<x-card.ruleline>On exposure, trigger Security Check.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
