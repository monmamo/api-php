<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Halitosis')]
#[Concept('Bane')]
#[ImageCredit('Image by Merry Shuporna Biswas')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/Halitosis.jpg</x-card.hero.local>

<x-card.flavortext>They say that bad breath is better than no breath at all…</x-card.flavortext>

<x-card.cardrule y="585"  >
<x-card.ruleline>{{ \trans_choice('rules.monster-limit', 1)}}</x-card.ruleline>
</x-card.cardrule>


<x-card.phaserule type="Resolution" >
  <text >
<x-card.ruleline>When a Monster on this</x-card.ruleline>
<x-card.ruleline>Monster’s team attacks or defends,</x-card.ruleline>
<x-card.ruleline>reduce the damage done/prevented by 1d4.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
