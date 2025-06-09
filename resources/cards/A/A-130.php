<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Merchandizing')]
#[Concept('Vendor')]
#[Concept('Cost', 2)]
#[ImagePrompt('store shelves filled with stuffed monsters and other toys')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.flavortext>
<x-card.flavortext.line>Where the real money from the concept is made.</x-card.flavortext.line>
<x-card.flavortext.line>- Mel Brooks (paraphrased)</x-card.flavortext.line>
</x-card.flavortext>

     <x-card.phaserule type="Draw" ><text>
         <x-card.ruleline>Discard a card from your hand</x-card.ruleline>
         <x-card.ruleline>to take a card of your choice from your Library.</x-card.ruleline>
         <x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
         </text></x-card.phaserule>
HTML;
    }
};
