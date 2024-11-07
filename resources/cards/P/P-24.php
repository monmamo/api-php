<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tropical Island')]
#[Concept('Place')]
#[Concept('Island')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        // Counts as Summer.
        yield <<<'HTML'
HTML;
    }
};
