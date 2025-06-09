<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Canned Monster Food')]
#[Concept('Item')]
#[Concept('Food')]
#[FlavorText(['Meaty chunks in a thick, savory gravy.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="165" >
<x-card.ruleline>Upkeep phase: Attach Monstermeal to a Monster that is not Knocked Out.</x-card.ruleline>
<x-card.ruleline>Declaration phase: This Monster may not attack or be attacked during this turn.</x-card.ruleline>
<x-card.ruleline>Resolution phase: Discard this card. Remove 1d10-1d4 @damage from this Monster.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
