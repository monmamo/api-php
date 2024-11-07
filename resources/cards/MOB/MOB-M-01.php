<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
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
#[Concept('Miltiplier', 'x2')]
#[ImageCredit('')]
#[FlavorText([])]
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
