<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// Capo

return new
#[Title('Crew Leader')]
#[Concept('Mobster')]
#[Concept('DamageCapacity', 13)]
#[Concept('Size', 4)]
#[Concept('Speed', 4)]
#[Concept('Cost', 5)]
#[IsIncomplete]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Member of a Crime Family who leads a crew.</x-card.flavortext>
HTML;
    }
};
