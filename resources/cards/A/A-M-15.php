<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Good Boy')]

      #[Concept('Monster')]
      #[Concept('Male')]
      #[Concept('DamageCapacity', 70)]
      #[Concept('Level', 38)]
      #[Concept('Size', 18)]
      #[Concept('Speed', 10)]
      #[Concept('Multiplier', 'x3')]

      #[LocalHeroImage('hero/A-M-15.png')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'

<x-card.cardrule y="400" height="55" >
<x-card.normalrule>Taxons: Canos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Resolution" height="235">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Resilience</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>After applying attacks and defenses,</x-card.normalrule>
<x-card.normalrule>If subject to a Bane, roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6,5,4) The Bane has no effect. If the</x-card.normalrule>
<x-card.normalrule>Bane is attached, discard it.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
