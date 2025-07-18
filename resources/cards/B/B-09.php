<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Volcanic Eruption')]
    #[Concept('Catastrophe')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text>
<x-card.ruleline>May be played only when the Place on the Battlefield is a Volcano.</x-card.ruleline>
<x-card.ruleline>Each Monster on the Battlefield that does not have some sort of flying ability immediately takes 2 @damage.</x-card.ruleline>
<x-card.ruleline>Each player discards 3 cards from the top of his Library.</x-card.ruleline>
<x-card.ruleline>Discard all Mobster and Bystander cards on the Battlefield.</x-card.ruleline>
    </text>
HTML;
    }
};
