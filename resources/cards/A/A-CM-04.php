<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('clone monster L45')]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '45')]
#[Concept('DamageCapacity', '70')]
#[Concept('Size', '12')]
#[Concept('Speed', '21')]
#[Concept('Boost', '3')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
