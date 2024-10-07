<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

if (!\defined('PREREQUISITE')) {
    \define('PREREQUISITE', \trans_choice('rules.monster-limit', 1));
}

return new
#[Title('Halitosis')]
#[Concept('Bane')]
#[IsGeneratedImage]
#[FlavorText('They say that bad breath is better than no breath at all…')]
#[LocalHeroImage('A110.jpg')]
#[Prerequisites([PREREQUISITE])]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" height="135">
  <text >
<x-card.normalrule>When a Monster on this</x-card.normalrule>
<x-card.normalrule>Monster’s team attacks or defends,</x-card.normalrule>
<x-card.normalrule>reduce the damage done/prevented by 2d6.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
