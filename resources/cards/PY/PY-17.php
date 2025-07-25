<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mana Burn')]
#[Concept('Skill')]
#[ImageCredit('')]

#[Prerequisites(['Requires Pyros.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Declaration phase:: You may turn any Mana cards attached to this Monster into single Fire for the rest of the turn. This Skill can't be used if this Monster is Confused, Paralyzed, Hypnotized or Asleep.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
