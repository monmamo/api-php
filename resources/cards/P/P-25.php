<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tundra')]
#[ImageCredit('Image by USER_NAME on SERVICE')]
#[Concept('Place')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    // Counts as Winter.
    public function content(): \Traversable
    {
        yield <<<'HTML'
HTML;
    }
};
