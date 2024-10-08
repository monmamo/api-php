<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: Light Arcanine \"Drive Off\" power
return new
#[Title('Drive Off')]
#[Concept('Skill')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="505" >
<x-card.smallrule>This Skill cannot be used if this Monster is</x-card.smallrule>
<x-card.smallrule>Confused, Paralyzed, Hypnotized or Asleep</x-card.smallrule>
<x-card.smallrule>at the Command phase.</x-card.smallrule>
</x-card.cardrule>
<x-card.phaserule type="Command" lines="1"><text>
<x-card.normalrule>Choose one opposing Monster.</x-card.normalrule>
</text></x-card.cardrule>
<x-card.phaserule type="Resolution" lines="6"><text>
<x-card.normalrule>Resolution phase: If this Monster was not</x-card.normalrule>
<x-card.normalrule>attacked during this turn and the</x-card.normalrule>
<x-card.normalrule>chosen Monster was not Knocked Out,</x-card.normalrule>
<x-card.normalrule>your opponent must discard that Monster</x-card.normalrule>
<x-card.normalrule>and all cards attached to it. You must then</x-card.normalrule>
<x-card.normalrule>discard this Monster and all cards attached to it.</x-card.normalrule>
</text></x-card.cardrule>
HTML;
    }
};
