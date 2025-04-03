<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Watt-a-Pest')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 15)]
    #[Concept('Level', 30)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 3)]
    #[Concept('Boost',3)]
    #[ImagePrompt('yellow electric rodent monster of weird zoology in a factory')]
    #[LocalHeroImage('hero/A-M-05.png')]
    #[\App\CardAttributes\ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Energos, Musos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Draw" height="175">
<text>
    <x-card.skilltitle>Chew on Power Cords</x-card.skilltitle>
<x-card.normalrule>You may stop any player from</x-card.normalrule>
<x-card.normalrule>taking their Draw Phase.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
