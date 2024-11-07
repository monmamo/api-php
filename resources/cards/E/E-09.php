<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Testosterone')]
#[Concept('Trait')]
#[Concept('Hormone')]
class(__FILE__) implements CardComponents
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
