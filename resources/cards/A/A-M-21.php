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
    #[Title('Siria')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 16)]
    #[Concept('Level', 35)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '3')]
    #[LocalHeroImage('hero/A-M-21.png')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Canos, Lumos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Trait" height="150">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Soothing Glow</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="105">
<x-card.normalrule>Reduce Speed of all other Monsters by 2.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
