<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: Familiar Bell PTCG card https://bulbapedia.bulbagarden.net/wiki/Familiar_Bell_(Darkness_Ablaze_161)
return new
#[Title('Familiar Bell')]
#[Concept('Draw')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="220" >
<x-card.normalrule>Search your Library for a Monster with</x-card.normalrule>
<x-card.normalrule>the same name as a Monster in your Discard.</x-card.normalrule>
<x-card.normalrule>Reveal that/those card(s). Put that/those</x-card.normalrule>
<x-card.normalrule>card(s) in your hand. Shuffle your Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
