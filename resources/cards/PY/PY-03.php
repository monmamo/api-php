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
#[Title('Candlewax')]
#[Concept('Consumable')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="3" >
<x-card.normalrule>As long as Candlewax is attached, </x-card.normalrule>
<x-card.normalrule>each Fire card attached to the Monster </x-card.normalrule>
<x-card.normalrule>counts as 2 Fire mana.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
