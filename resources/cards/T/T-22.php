<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Therapeudic Dander')]
#[Concept('Trait')]
#[Prerequisites(lines: 'Requires Floros.', y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Upkeep phase:: Remove 1d4 @damage from each Monster in play (both yours and your opponents').</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
