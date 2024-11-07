<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration:: Welder PTCG card https://bulbapedia.bulbagarden.net/wiki/Welder_(Unbroken_Bonds_214)
return new
#[Title('Welder')]
#[Concept('Draw')]
#[ImageCredit('')]
#[FlavorText([])]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Attach up to 2 [[Fire]] cards from your hand to 1 of your Monsters. If you do, draw 3 cards.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
