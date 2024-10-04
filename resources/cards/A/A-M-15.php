<?php

return new
#[\App\GeneralAttributes\Title('Canor L38')]

    #[\App\Concept('Monster', 'Male', 'DamageCapacity:70', 'Level:38', 'Size:18', 'Speed:10', 'Multiplier:x3')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-15.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Canos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Resolution" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Resilience</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>If subject to a Bane, roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6,5,4) The Bane has no effect.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
}
};
