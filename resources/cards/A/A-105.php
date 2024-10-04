<?php
// https://www.shutterstock.com/image-photo/3d-rendering-tranquilizer-dart-on-white-169987271

return new
#[\App\GeneralAttributes\Title('Tranquilizer Dart')]
#[\App\Concept('Bane')]
#[\App\Concept('Item')]
#[\App\Concept('Weapon')]
    #[\App\CardAttributes\ImageCredit('Shutterstock #169987271 by Inked Pixels')]
    #[\App\CardAttributes\LocalHeroImage('hero/tranquilizer-dart.jpg')]
    #[\App\CardAttributes\FlavorText('Ouuuuuch……')]

    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'

<text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

    <x-card.phaserule type="Upkeep"  height="100">
        <text >
<x-card.normalrule>For 1d4 turns (including this one),</x-card.normalrule>
<x-card.normalrule>apply Paralysis.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
}
};
