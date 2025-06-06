<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration:: PTCG: Typlosion L55 "Fire Recharge" power
return new
#[Title('Fire Recharge')]
#[Concept('Skill')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.normalrule>Upkeep phase:: If this Monster is not Confused, Paralyzed or Hypnotized, you may attach 1d4 Fire (A-002)s from your Refuse to this Monster.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
