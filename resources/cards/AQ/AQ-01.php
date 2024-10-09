<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cresting Wave')]
#[Concept('Attack')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
#[Prerequisites(lines: ['Requires Aquos.', 'Can be used only at an Ocean.'], y: 460)]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Summons a large wave, carrying the force of the ocean to sweep away opponents.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
