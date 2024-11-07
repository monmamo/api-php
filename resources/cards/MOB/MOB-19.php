<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Bread and Circuses')]
#[Concept('Upkeep')]
#[ImageCredit('')]
#[FlavorText([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="110" >
<x-card.normalrule>Discard 2 cards for each Bystander on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Remove all Bystanders from the Battlefield.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
