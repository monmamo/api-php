<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Wolcanic Island')]
#[ImageCredit('Image by USER_NAME on SERVICE')]
#[Concept('Place')]
#[Concept('Generic')]
#[Concept('Island')]
#[Concept('Mountain')]
#[Concept('Volcano')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
HTML;
    }
};
