<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Motorcycle Gang monster L46')]
#[Concept('Monster')]
#[Concept('Female')]
#[Concept('Level', '46')]
#[Concept('DamageCapacity', '77')]
#[Concept('Size', '22')]
#[Concept('Speed', '8')]
#[Concept('Boost', '3')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
