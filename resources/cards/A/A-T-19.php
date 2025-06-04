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
<x-card.normalrule>During the first round of turns,</x-card.normalrule>
<x-card.normalrule>this Monster's Speed is halved</x-card.normalrule>
<x-card.normalrule>and Attacks do half as much damage.</x-card.normalrule>
<x-card.normalrule>During subsequent turns, Speed +Boost</x-card.normalrule>
<x-card.normalrule>and Attacks do +Boost damage.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
