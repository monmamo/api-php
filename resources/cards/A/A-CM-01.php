<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('clone monster L29')]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '29')]
#[Concept('DamageCapacity', '60')]
#[Concept('Size', '18')]
#[Concept('Level', '9')]
#[Concept('Boost', '2')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>TODO</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
