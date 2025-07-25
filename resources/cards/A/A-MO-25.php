<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Erotic Dancer')]
#[Concept('Bystander')]
#[Concept('Female')]
#[ImageCredit('')]

#[Prerequisites('Can replace any Cheerleader (A-032).')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Choose an opposing Male Master or Bystander.
    For the next 1d4 turns, that card has no effect through its players next turn.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
