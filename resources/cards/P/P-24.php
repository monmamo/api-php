<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tropical Island')]
#[ImageCredit('Image by USER_NAME on SERVICE')]
#[Concept('Place')]
#[Concept('Island')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        // Counts as Summer.
        yield <<<'HTML'
HTML;
    }
};
