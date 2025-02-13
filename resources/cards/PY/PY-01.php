<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
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
#[Prerequisites(['The Monster using this skill must have at least one Fire (A-002) attached.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Discard any number of Fire (A-002) from this Monster. <x-card.normalrule>
<x-card.normalrule>This attack does 2d4 @damage for each Fire (A-002) discarded.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
