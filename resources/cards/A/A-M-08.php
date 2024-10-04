<?php

return new
#[\App\GeneralAttributes\Title('Energcanor L45')]

    #[\App\Concept('Monster', 'Male', 'DamageCapacity:80', 'Level:45', 'Size:22', 'Speed:8', 'Multiplier:x3')]


    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-08.png)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Energos, Canos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Skill" height="175">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Beast Mode</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="70">
<x-card.normalrule>Size +3 for each Energy Mana</x-card.normalrule>
<x-card.normalrule>attached to this Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
}
};
