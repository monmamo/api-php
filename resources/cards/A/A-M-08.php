<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Energlupor L45')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 80)]
    #[Concept('Level', 45)]
    #[Concept('Size', 22)]
    #[Concept('Speed', 8)]
    #[Concept('Multiplier:x3')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    #[LocalHeroImage('hero/A-M-08.png')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Energos, Lupos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Skill" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Beast Mode</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>Size +3 for each Energy Mana</x-card.normalrule>
<x-card.normalrule>attached to this Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
