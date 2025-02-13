<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Street Gang monster L29')]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '29')]
#[Concept('DamageCapacity', '58')]
#[Concept('Size', '14')]
#[Concept('Speed', '14')]
#[Concept('Boost', '2')]
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
