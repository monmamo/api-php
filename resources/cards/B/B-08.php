<?php
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
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
<x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
<x-card.normalrule>If the Place card on the Battlefield is a Venue or Facility card, discard it.</x-card.normalrule>
<x-card.normalrule>Discard all Mobster and Bystander cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Discard all Item cards on the Battlefield.</x-card.normalrule>
    </text>
HTML;
}
};
