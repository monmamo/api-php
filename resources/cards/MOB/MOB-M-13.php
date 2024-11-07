<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Street Gang monster L34')]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '34')]
#[Concept('DamageCapacity', '65')]
#[Concept('Size', '16')]
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
