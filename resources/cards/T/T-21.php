<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Intimidation')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Resolution phase: This Monster cannot use any Defenses, but prevents 1dSize damage if not Paralyzed, Hypnotized or Asleep.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
