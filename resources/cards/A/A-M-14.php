<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Regfelor L44')]

    #[Concept('Monster', )]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 65, )]
    #[Concept('Level', 44)]
    #[Concept('Size', 17)]
    #[Concept('Speed', 10)]
    #[Concept('Multiplier', 'x2')]

    #[LocalHeroImage('hero/regfelor.png')]
    #[IsGeneratedImage]
    #[ImagePrompt('lavender cat monster of weird zoology by a lake')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Regos, Felos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Resolution" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Mind Control</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="70">
<x-card.normalrule>If attacked, roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6) The attack has no effect.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
