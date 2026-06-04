<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: Light Arcanine \"Drive Off\" power
return new
#[Title('Drive Off')]
#[Concept('Skill')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="505" >
<x-card.ruleline class="smallrule">This Skill cannot be used if this Monster is</x-card.ruleline>
<x-card.ruleline class="smallrule">Confused, Paralyzed, Hypnotized or Asleep</x-card.ruleline>
<x-card.ruleline class="smallrule">at the Command phase.</x-card.ruleline>
</x-card.cardrule>
<x-card.phaserule type="Command" ><text>
<x-card.ruleline>Choose one opposing Monster.</x-card.ruleline>
</text></x-card.cardrule>
<x-card.phaserule type="Resolution" lines="6"><text>
<x-card.ruleline>Resolution phase: If this Monster was not</x-card.ruleline>
<x-card.ruleline>attacked during this turn and the</x-card.ruleline>
<x-card.ruleline>chosen Monster was not Knocked Out,</x-card.ruleline>
<x-card.ruleline>your opponent must discard that Monster</x-card.ruleline>
<x-card.ruleline>and all cards attached to it. You must then</x-card.ruleline>
<x-card.ruleline>discard this Monster and all cards attached to it.</x-card.ruleline>
</text></x-card.cardrule>
HTML;
    }
};
