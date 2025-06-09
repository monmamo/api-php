<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Slow Start')]
#[Concept('Trait')]
#[Concept('Cost', 3)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule :>
<x-card.ruleline>During the first round of turns,</x-card.ruleline>
<x-card.ruleline>this Monster's Speed is halved</x-card.ruleline>
<x-card.ruleline>and Attacks do half as much damage.</x-card.ruleline>
<x-card.ruleline>During subsequent turns, Speed +Boost</x-card.ruleline>
<x-card.ruleline>and Attacks do +Boost damage.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
