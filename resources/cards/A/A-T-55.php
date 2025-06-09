<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[IsIncomplete]
#[Title('Hammerhead')]
#[Concept('Trait')]
#[Concept('Size', '+1')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Gives the Headbutt attack.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
