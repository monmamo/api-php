<?php

return new
#[\App\GeneralAttributes\Title('Felequess L48')]

    #[\App\Concept('Monster', 'Male', 'DamageCapacity:90', 'Level:48', 'Size:28', 'Speed:16', 'Multiplier:x4')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/felequos.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Felequos</x-card.normalrule>
</x-card.cardrule>
HTML;
}
};
