<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Bottle Rocket')]
#[Concept('Weapon')]
#[Concept('Cost', 5)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule>
<x-card.ruleline>Roll 1d6 for each Monster in play</x-card.ruleline>
<x-card.ruleline>(including those that are</x-card.ruleline>
<x-card.ruleline>Knocked Out). The one that gets the</x-card.ruleline>
<x-card.ruleline>lowest number takes 6 @damage.</x-card.ruleline>
<x-card.ruleline class="smallrule">In case of a tie, reroll for all Monsters that</x-card.ruleline>
<x-card.ruleline class="smallrule">have the lowest number, eliminating other Monsters.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
