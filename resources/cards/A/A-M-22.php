<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
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

#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>hero/A-M-22.jpeg</x-card.hero.local>

<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Canos</x-card.normalrule>
</x-card.cardrule>

<x-card.cardrule height="55" >
<x-card.normalrule>On exposure, trigger Security Check.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
