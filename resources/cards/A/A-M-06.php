<?php

return new
#[\App\GeneralAttributes\Title('Enerctigress L40')]

    #[\App\Concept('Monster', 'Female', 'DamageCapacity:70', 'Level:40', 'Size:20', 'Speed:10', 'Multiplier:x3')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-06.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Energos, Tigros</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Thunder Roar</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>Roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6,5) Attack has no effect.</x-card.normalrule>
<x-card.normalrule>@dieroll(4,3,2) Attack does only half its damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
}
};
