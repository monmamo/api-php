<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Cuddles')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 20)]
    #[Concept('Level', 45)]
    #[Concept('Size', 6)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', 3)]
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>hero/A-M-08.png</x-card.hero.local>

            <x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Energos, Lupos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Skill" height="175">
<text>
<x-card.skilltitle>Beast Mode</x-card.skilltitle>
<x-card.normalrule>Size +1 for each Electricity (A-003)</x-card.normalrule>
<x-card.normalrule>attached to this Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
