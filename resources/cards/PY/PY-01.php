<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: https://bulbapedia.bulbagarden.net/wiki/Single_Strike_Scroll_of_Piercing_(Chilling_Reign_154)
return new
#[Title('Bullet Breakthrough')]
#[Concept('Attack')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
#[Prerequisites(['The Monster using this skill must have at least one Fire card attached.'])]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Discard any number of Fire cards from this monster. This attack does 2d4 damage for each Fire card discarded.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
