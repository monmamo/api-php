<?php

// https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2F4vvvGVlDFF.png?alt=media&token=6dddeb26-525f-4803-9565-1dc5086089cf
return new
#[\App\GeneralAttributes\Title('Pyros Monster L40')]

    #[\App\Concept('Monster', 'Female', 'DamageCapacity:70', 'Level:40', 'Size:20', 'Speed:10', 'Multiplier:x3')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-11.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Pyros, TODO</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="210">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Fire Roar</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="105">
<x-card.normalrule>Roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6,5) Attack has no effect.</x-card.normalrule>
<x-card.normalrule>@dieroll(4,3,2) Attack does only half its damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
}
};
