<?php

return new
#[\App\GeneralAttributes\Title('Pyrohystrix L45')]

    #[\App\Concept('Monster', 'Female', 'DamageCapacity:80', 'Level:45', 'Size:25', 'Speed:8', 'Multiplier:x4')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-12.jpeg)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Pyros, Hystrix</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Hot Quills</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>Does 6d6 damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
}
};
