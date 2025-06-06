<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Motorcycle Gang monster L38')]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '38')]
#[Concept('DamageCapacity', '69')]
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
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
