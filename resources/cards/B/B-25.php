<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sinkhole')]
#[Concept('Catastrophe')]
#[LocalHeroImage('TODO.png')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="110" >
<x-card.normalrule>Each Monster in play that does not have some sort of flying ability immediately takes 20 damage.</x-card.normalrule>
<x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
