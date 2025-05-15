<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\CardAttributes\RaidCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sidestep')]
#[Concept('Movement', 1)]
#[ImageCredit('Image by USER_NAME on SERVICE')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;
    use RaidCardAttributes { RaidCardAttributes::system insteadof DefaultCardAttributes; }

    public function content(): \Traversable
    {
        yield <<<'HTML'
HTML;
    }
};
