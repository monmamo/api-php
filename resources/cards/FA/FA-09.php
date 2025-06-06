<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Recovery Berry')]
#[Concept('Berry')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.smallrule>Goes into effect if the Monster has a Bane.</x-card.smallrule>
<x-card.normalrule>Removes all Banes.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
