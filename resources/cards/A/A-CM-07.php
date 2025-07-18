<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Motorcycle Gang monster L41')]
#[Concept('Monster')]
#[Concept('Female')]
#[Concept('Level', '41')]
#[Concept('DamageCapacity', '68')]
#[Concept('Size', '19')]
#[Concept('Speed', '9')]
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
