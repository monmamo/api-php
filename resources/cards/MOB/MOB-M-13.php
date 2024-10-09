<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
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
#[ImageCredit('Image by USER_NAME on SERVICE')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
HTML;
    }
};
