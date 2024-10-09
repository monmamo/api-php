<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Testosterone')]
#[Concept('Trait')]
#[Concept('Hormone')]
#[ImageCredit('Image by USER_NAME on SERVICE')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    Size+5
    Enhances attack.
    Increases aggression.
HTML;
    }
};
