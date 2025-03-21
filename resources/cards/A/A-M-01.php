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
    #[Title('Aquomusor L30')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Level', 30)]
    #[Concept('Size', 3)]
    #[Concept('Speed', 5)]
    #[Concept('Boost', '2')]
    #[ImagePrompt('blue mouse of weird zoology swimming in a lake')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    #[LocalHeroImage('hero/A-M-01.png')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Aquos, Musos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" fill="black" text-anchor="middle" class="cardname" alignment-baseline="middle">Slippery When Wet</text>
<text  y="<?= config('card-design.titlebox.title-height')?>"  height="70" fill="black">
<x-card.normalrule>Takes no damage from Physical</x-card.normalrule>
<x-card.normalrule>attacks when 1+ Water (A-001) attached.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
