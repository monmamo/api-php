<?php

return new
#[\App\GeneralAttributes\Title('Pyros Monster L35')]

    #[\App\Concept('Monster', 'Male', 'DamageCapacity:65', 'Level:35', 'Size:18', 'Speed:8', 'Multiplier:x3')]

    #[\App\CardAttributes\ImagePrompt('red panda of weird zoology shooting fire from its mouth')]
    #[\App\CardAttributes\IsGeneratedImage]
    #[\App\CardAttributes\ImageCredit(null)]

    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/A-M-10.jpeg)" />
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Pyros, TODO</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Upkeep" height="210">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Flaming Tail</text>
<text  y="<?= config('card-design.titlebox.height')?>"  height="105">
<x-card.normalrule>Once per turn, you may search your</x-card.normalrule>
<x-card.normalrule>Library or Discard for a Fire Mana</x-card.normalrule>
<x-card.normalrule>and attach it to this Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
}
};
