<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Biting')]
    #[Concept('Trait')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    #[FlavorText('What sharp teeth you have.')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
        <image x="0" y="0" class="hero" href="@local(A006.png)" source="https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm" />

    <x-card.phaserule type="Attack" height="140">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Bite</text>
<text  y="<?= config('card-design.titlebox.title-height')?>"  height="35">
<x-card.normalrule>Does Speed×3 damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
