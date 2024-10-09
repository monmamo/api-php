<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Street Gang monster L31')]
#[Concept('Monster')]
#[Concept('Female')]
#[Concept('Level', '31')]
#[Concept('DamageCapacity', '61')]
#[Concept('Size', '15')]
#[Concept('Speed', '13')]
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
