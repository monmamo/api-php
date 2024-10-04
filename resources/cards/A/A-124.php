<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Nurse')]
#[Concept('Bystander')]
#[Concept('Female')]
#[Concept('Integrity', '1d6')]
#[IsGeneratedImage]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A188.png)" />

    <text y="460" filter="url(#solid)">
      <x-card.smallrule>{{ trans_choice('rules.player-limit',1) }}</x-card.smallrule>
    </text>

<x-card.phaserule type="Upkeep" y="515" :lines="3">
  <text >
<x-card.normalrule>Choose a Monster on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Discard all cards other than Traits </x-card.normalrule>
  <x-card.normalrule>attached to that Monster.</x-card.normalrule>
</text>
</x-card.phaserule>

<x-card.phaserule type="Command" y="650" :lines="2">
  <text >
<x-card.normalrule>The Monster cannot attack, </x-card.normalrule>
<x-card.normalrule>be attacked, or use any Skills.</x-card.normalrule>
</text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" :lines="1">
  <text >
<x-card.normalrule>Remove all damage from the Monster.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
