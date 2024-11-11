<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Turf War')]
#[Concept('Catastrophe')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Designate a Mobster group. Only Mobsters belonging to that group may remain in the Battlefield. Discard all Bystander cards on the Battlefield. No more Bystander cards can be played.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
