<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('clone monster 50')]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '50')]
#[Concept('DamageCapacity', '76')]
#[Concept('Size', '20')]
#[Concept('Speed', '11')]
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
