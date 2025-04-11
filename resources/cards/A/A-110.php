<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

if (!\defined('MONSTER_LIMIT_PREREQUISITE')) {
    \define('MONSTER_LIMIT_PREREQUISITE', \trans_choice('rules.monster-limit', 1));
}

return new
#[Title('Halitosis')]
#[Concept('Bane')]
#[IsGeneratedImage]
#[ImageIsPrototype]
#[FlavorText('They say that bad breath is better than no breath at all…')]
#[Prerequisites([MONSTER_LIMIT_PREREQUISITE])]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>A110.jpg</x-card.hero.local>
            
<x-card.phaserule type="Resolution" height="135">
  <text >
<x-card.normalrule>When a Monster on this</x-card.normalrule>
<x-card.normalrule>Monster’s team attacks or defends,</x-card.normalrule>
<x-card.normalrule>reduce the damage done/prevented by 1d4.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
