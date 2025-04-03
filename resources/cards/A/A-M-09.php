<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Flameback')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 15)]
    #[Concept('Level', 30)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 4)]
    #[Concept('Boost',2)]
    #[LocalHeroImage('hero/A-M-09.png')]
    #[ImagePrompt('red fire rodent monster of weird zoology next to a caldera')]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Pyros, Musos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Upkeep" height="175">
    <text>
<x-card.skilltitle>Fiery Pest</x-card.skilltitle>
<x-card.normalrule>Discard 1 Mobster or Bystander</x-card.normalrule>
<x-card.normalrule>from the Battlefield.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
