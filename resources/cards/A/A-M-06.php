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
    #[Title('Enerctigress L40')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Level', 40)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost',3)]
    #[ImagePrompt('yellow electric tiger monster of weird zoology')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    #[LocalHeroImage('hero/A-M-06.png')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'

<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Energos, Tigros</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="200">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Thunder Roar</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>Roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6,5) Attack has no effect.</x-card.normalrule>
<x-card.normalrule>@dieroll(4,3,2) Attack does only half its damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
