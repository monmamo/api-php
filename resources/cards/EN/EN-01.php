<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Conductivity')]
#[Concept('Trait')]
#[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
#[FlavorText('FLAVOR_TEXT')]
#[ConceptIconHeroImage('Energos')]
#[Prerequisites(lines: 'Requires Energos.', y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text>
    TODO
</text>
HTML;
    }
};
