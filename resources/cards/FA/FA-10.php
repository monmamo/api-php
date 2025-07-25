<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// Compare to M.R.E. (FA-11).
return new
#[Title('Monstermeal')]
#[Concept('Consumable')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="165" >
<x-card.ruleline>- Upkeep phase:: Attach Monstermeal to a Monster that is not Knocked Out.</x-card.ruleline>
<x-card.ruleline>- Declaration phase:: This Monster may not attack or be attacked during this turn.</x-card.ruleline>
<x-card.ruleline>- Resolution phase:: Discard this card. Remove 3 @damage from this Monster.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
