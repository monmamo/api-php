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
#[Title('Lutress L35')]

    #[Concept('Monster')]
     #[Concept('Female')]
      #[Concept('DamageCapacity', 80)]
      #[Concept('Level', 35)]
       #[Concept('Size', 18)]
        #[Concept('Speed', 8)]
        #[Concept('Multiplier:x2')]

    #[IsGeneratedImage]
    #[ImageCredit(null)]
    #[ImagePrompt('blue and yellow otter of weird at the edge of the water on a beach')]
    #[LocalHeroImage('hero/A-M-02.png')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Aquos, Lutros</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Roll Away</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>Prevent 12 damage plus</x-card.normalrule>
<x-card.normalrule>1d6 damage for each Water Mana attached.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
