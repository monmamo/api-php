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
#[Title('Pyros Monster L35')]

    #[Concept('Monster')]
#[Concept('Male')]
#[Concept('DamageCapacity', 65)]
#[Concept('Level', 35)]
#[Concept('Size', 18)]
#[Concept('Speed', 8)]
#[Concept('Multiplier', 'x3')]
#[LocalHeroImage('hero/A-M-10.jpeg')]

    #[ImagePrompt('red panda of weird zoology shooting fire from its mouth')]
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

<x-card.phaserule type="Upkeep" height="210">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Flaming Tail</text>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="105">
<x-card.normalrule>Once per turn, you may search your</x-card.normalrule>
<x-card.normalrule>Library or Discard for a Fire Mana</x-card.normalrule>
<x-card.normalrule>and attach it to this Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
