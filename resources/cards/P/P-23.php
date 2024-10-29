<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sedate Forest')]
#[ImageCredit('Image by USER_NAME on SERVICE')]
#[Concept('Place')]
#[Concept('Forest')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        // INCOMPLETE If a Monster is Asleep, its owner flips 2 coins instead of 1 for that Bane between turns. If either of them is tails, that Monster is still Asleep.

        yield <<<'HTML'
HTML;
    }
};
