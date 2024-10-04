<?php

return new
#[\App\GeneralAttributes\Title('Lutress L35')]

    #[\App\Concept('Monster', 'Female', 'DamageCapacity:80', 'Level:35', 'Size:18', 'Speed:8', 'Multiplier:x2')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-02.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Aquos, Lutros</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Roll Away</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>Prevent 12 damage plus</x-card.normalrule>
<x-card.normalrule>1d6 damage for each Water Mana attached.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
}
};
