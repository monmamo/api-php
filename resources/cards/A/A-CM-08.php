<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title("Motorcycle Gang monster L43\n")]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '43')]
#[Concept('DamageCapacity', '72')]
#[Concept('Size', '20')]
#[Concept('Speed', '9')]
#[Concept('Boost', '3')]
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
