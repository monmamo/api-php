<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cugine')]
#[Concept('Mobster')]
#[FlavorText('A young Soldier in a Crime Family, striving to be made.')]
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
