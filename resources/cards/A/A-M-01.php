<?php

return new
#[\App\GeneralAttributes\Title('Aquomusor L30')]

    #[\App\Concept('Monster', 'Male', 'DamageCapacity:70', 'Level:30', 'Size:12', 'Speed:20', 'Multiplier:x2')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-01.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Aquos, Musos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Slippery When Wet</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>Takes no damage from Physical</x-card.normalrule>
<x-card.normalrule>attacks when 1+ Water Mana attached.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
}
};
