<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Street Gang monster L36')]
#[Concept('Monster')]
#[Concept('Female')]
#[Concept('Level', '36')]
#[Concept('DamageCapacity', '38')]
#[Concept('Size', '17')]
#[Concept('Speed', '12')]
#[Concept('Multiplier', 'x3')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
HTML;
    }
};
