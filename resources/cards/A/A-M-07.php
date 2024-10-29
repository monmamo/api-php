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
#[Title('Energos Monster L35')]

    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 65)]
    #[Concept('Level', 35)]
    #[Concept('Size', 12)]
    #[Concept('Speed', 18)]
    #[Concept('Multiplier:x2')]

    #[IsGeneratedImage]
    #[ImageCredit(null)]
    #[LocalHeroImage('hero/A-M-07.png')]
    #[ImagePrompt('yellow electric dog monster of weird zoology in a factory')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'

<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Energos, TODO</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Skill" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Puppy Power</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>You may transfer Energy Mana between</x-card.normalrule>
<x-card.normalrule>this Monster & any other Energos Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
