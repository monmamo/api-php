<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Pyrohystrix L45')]

    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 80)]
    #[Concept('Level', 45)]
    #[Concept('Size', 25)]
    #[Concept('Speed', 8)]
    #[Concept('Multiplier', 'x4')]
    #[LocalHeroImage('hero/A-M-12.jpeg')]

    #[IsGeneratedImage]
    #[ImageCredit(null)]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Pyros, Hystrix</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Hot Quills</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>Does 6d6 damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
