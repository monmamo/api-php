<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// prompt: A potion bottle with a green liquid inside.

return new
#[Title('Healing Herb')]
#[Concept('Upkeep')]
#[Concept('Item')]
#[Concept('Healing')]
#[ImageCredit('')]
#[FlavorText(['The best medicine is the one that tastes the worst.'])]
#[LocalHeroImage('FA-08.png')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="95" >
<x-card.smallrule>Attach this card to a Monster.</x-card.smallrule>
<x-card.normalrule>After all attacks have been resolved (even if the Monster has been knocked out), roll 3d6. Remove that amount of damage from that Monster. If two or three of the rolls are 5 or higher, remove all Banes from that Monster.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
