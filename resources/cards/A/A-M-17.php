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
    #[Title('Bluefairy')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 14)]
    #[Concept('Level', 30)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 5)]
    #[Concept('Boost', '2')]
    #[LocalHeroImage('hero/A-M-17.jpg')]
    #[\App\CardAttributes\ImageCredit('Image by Merry Shuporna Biswas')]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Carmos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Skill" height="210">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Irresistible Cuteness</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="105">
<x-card.normalrule>Master, Mobster and Bystander cards</x-card.normalrule>
<x-card.normalrule>have no effect.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
