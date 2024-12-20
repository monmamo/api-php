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
    #[Title('Grumpus')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 87)]
    #[Concept('Level', 41)]
    #[Concept('Size', 23)]
    #[Concept('Speed', 9)]
    #[Concept('Multiplier', 'x3')]
    #[LocalHeroImage('hero/A-M-20.jpeg')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Hominos, Gouros</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Trait" height="210">
<text  y="<?= config('card-design.titlebox.title-height')?>" height="35">
<x-card.normalrule>Increase Speed by 5 for </x-card.normalrule>
<x-card.normalrule>each Cheerleader on your team.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
