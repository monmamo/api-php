<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Biting')]
    #[Concept('Trait')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    #[FlavorText('What sharp teeth you have.')]
    #[LocalHeroImage('A006.png')]
    #[Prerequisites(y: 490)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Attack" height="140">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Bite</text>
<text  y="<?= config('card-design.titlebox.title-height')?>"  height="35">
<x-card.normalrule>Does 3×Speed @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
