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
    #[Title('Greybeast')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 22)]
    #[Concept('Level', 42)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '3')]
    #[LocalHeroImage('hero/A-M-16.png')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Gouros</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Resolution" height="210">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Nightmare Fuel</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="105">
<x-card.normalrule>Every Monster that does not use an</x-card.normalrule>
<x-card.normalrule>Attack, Defense or Skill during the turn</x-card.normalrule>
<x-card.normalrule>loses 3 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
