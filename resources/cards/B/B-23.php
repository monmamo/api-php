<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mob Lockdown')]
#[Concept('Catastrophe')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="220" >
<x-card.ruleline>Discard all Bystander cards.</x-card.ruleline>
<x-card.ruleline>No more Bystander cards can be played</x-card.ruleline>
<x-card.ruleline>The Place cannot be changed.</x-card.ruleline>
<x-card.ruleline>No more Vendor cards can be played.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
