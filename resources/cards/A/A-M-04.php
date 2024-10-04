<?php

return new
#[\App\GeneralAttributes\Title('Aquos Monster L45')]

    #[\App\Concept('Monster', 'Male', 'DamageCapacity:95', 'Level:45', 'Size:25', 'Speed:10', 'Multiplier:x4')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-04.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Aquos, TODO</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="210">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Water Jet</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="105">
<x-card.normalrule>Discard 1+ Water Mana from this Monster.</x-card.normalrule>
<x-card.normalrule>For each Water Mana discarded,</x-card.normalrule>
<x-card.normalrule>does 10 damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
}
};
