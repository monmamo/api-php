<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tundra')]
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
