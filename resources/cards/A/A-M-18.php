<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Spike')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 76)]
    #[Concept('Level', 40)]
    #[Concept('Size', 20)]
    #[Concept('Speed', 14)]
    #[Concept('Multiplier:x3')]
    #[IsGeneratedImage]
    #[LocalHeroImage('hero/A-M-18.jpeg')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="400" height="55" >
<x-card.normalrule>Taxons: Aquos, Hystricos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="140">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Ball of Pain</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>Does Speed+3d6 damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
