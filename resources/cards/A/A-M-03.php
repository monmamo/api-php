<?php

return new
#[\App\GeneralAttributes\Title('Aquofeless L40')]

    #[\App\Concept('Monster', 'Female', 'DamageCapacity:90', 'Level:40', 'Size:20', 'Speed:10', 'Multiplier:x3')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-03.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Aquos, Felos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Skill" height="245">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Saliva Spray</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="140">
<x-card.normalrule>Discard 1+ Water Mana from this Monster.</x-card.normalrule>
<x-card.normalrule>For each Water Mana discarded, roll 1d6.</x-card.normalrule>
<x-card.normalrule>Attack does that much less damage,</x-card.normalrule>
<x-card.normalrule>& that Monster takes that damage instead.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
}
};
