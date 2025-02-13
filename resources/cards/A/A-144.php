<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Taxman')]
    #[Concept('Mobster')]
    #[Concept('Integrity', '2')]
    #[Concept('DamageCapacity', 11)]
    #[Concept('Size', 3)]
    #[Concept('Speed', 2)]
    #[ImageCredit('Image by macrovector on Freepik')]
    #[FlavorText('Declare the pennies on your eyes.')]
    #[LocalHeroImage('hero/taxman.jpg')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'

<x-card.phaserule type="Resolution" lines="2">
    <text >
<x-card.normalrule>Each player discards a card</x-card.normalrule>
<x-card.normalrule>from his hand or Library.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
