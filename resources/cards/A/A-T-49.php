<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[IsIncomplete]
#[Title('Therapeudic Dander')]
#[Concept('Trait')]
#[Prerequisites(lines: 'Requires Floros.', y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.phaserule type="Upkeep" >
    <text >
<x-card.ruleline>Remove 1 @damage from each Monster</x-card.ruleline>
<x-card.ruleline>in play (both yours and your opponents').</x-card.ruleline>
</text></x-card.phaserule>
HTML;
    }
};
