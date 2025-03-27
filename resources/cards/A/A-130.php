<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Merchandizing')]
#[Concept('Vendor')]
//#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText(['Where the real money from the concept is made.', '- Mel Brooks (paraphrased)'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.concept.staticon type=""/>
     <x-card.phaserule type="Draw" lines="3"><text>
         <x-card.normalrule>Discard a card from your hand</x-card.normalrule>
         <x-card.normalrule>to take a card of your choice from your Library.</x-card.normalrule>
         <x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
         </text></x-card.phaserule>
HTML;
    }
};
