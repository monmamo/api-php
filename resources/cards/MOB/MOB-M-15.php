<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Street Gang monster L38')]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '38')]
#[Concept('DamageCapacity', '70')]
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
