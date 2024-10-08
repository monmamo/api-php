<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cheerleader')]
#[Concept('Mobster')]
#[Concept('Female')]
#[Concept('Cumulative')]
#[Concept('Integrity', '2')]
#[Prerequisites('Can replace any Bystander Cheerleader (A-032).')]
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
