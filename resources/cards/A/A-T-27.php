<?php

// inspiration: PTCG Dark Primeape's \"Frenzy\" power

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Frenzy')]
#[Concept('Trait')]
#[Concept('Cost', 3)]
// #[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" >
    <text >
<x-card.ruleline>If this Monster does any damage</x-card.ruleline>
<x-card.ruleline>while it is Confused (even to itself),</x-card.ruleline>
<x-card.ruleline>it does +Boost @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
