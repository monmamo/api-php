<?php

return new
#[\App\GeneralAttributes\Title('Energos Monster L30')]

    #[\App\Concept('Monster', 'Female', 'DamageCapacity:60', 'Level:30', 'Size:16', 'Speed:10', 'Multiplier:x3')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-05.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Energos, TODO</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Draw" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Chew on Power Cords</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>You may stop any player from</x-card.normalrule>
<x-card.normalrule>taking their Draw Phase.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
}
};
