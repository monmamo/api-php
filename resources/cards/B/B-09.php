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
<x-card.normalrule>May be played only when the Place on the Battlefield is a Volcano.</x-card.normalrule>
<x-card.normalrule>Each Monster on the Battlefield that does not have some sort of flying ability immediately takes 2 @damage.</x-card.normalrule>
<x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
<x-card.normalrule>Discard all Mobster and Bystander cards on the Battlefield.</x-card.normalrule>
    </text>
HTML;
    }
};
