<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Don')]
#[Concept('Mobster')]
#[Concept('Boss')]
#[Concept('Male')]
#[Concept('DamageCapacity', 15)]
#[Concept('Size', 6)]
#[Concept('Speed', 2)]
#[FlavorText(['Highest ranking member of a Crime Family.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="0" >
<x-card.normalrule></x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
