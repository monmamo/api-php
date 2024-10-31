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
    #[Title('Pyrorodent L30')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 60)]
    #[Concept('Level', 30)]
    #[Concept('Size', 13)]
    #[Concept('Speed', 17)]
    #[Concept('Multiplier:x2')]
    #[LocalHeroImage('hero/A-M-09.png')]
    #[ImagePrompt('red fire rodent monster of weird zoology next to a caldera')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Pyros, TODO</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Upkeep" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Fiery Pest</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>Discard 1 Mobster or Bystander</x-card.normalrule>
<x-card.normalrule>from the Battlefield.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
