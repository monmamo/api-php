<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('clone monster L32')]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '32')]
#[Concept('DamageCapacity', '62')]
#[Concept('Size', '18')]
#[Concept('Speed', '10')]
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
