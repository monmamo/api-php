<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Tsunami')]
    #[Concept('Catastrophe')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="500">
<x-card.ruleline>Each player discards 3 cards from the top of his Library.</x-card.ruleline>
<x-card.ruleline>If the Place card on the Battlefield is a Venue or Facility card, discard it.</x-card.ruleline>
<x-card.ruleline>Discard all Mobster and Bystander cards on the Battlefield.</x-card.ruleline>
<x-card.ruleline>Discard all Item cards on the Battlefield.</x-card.ruleline>
    </text>
HTML;
    }
};
