<?php

return new
#[\App\GeneralAttributes\Title('Karma')]

    #[\App\Concept('Draw')]



    #[\App\CardAttributes\ImageCredit('ShutterStock #2389392699 by AnhSilhouetteArt')]

    #[\App\CardAttributes\FlavorText("It's a female monster.")]
    'background' => \view('Draw.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A139.jpg)" />
<x-card.phaserule type="Draw" lines="4"><text>
<x-card.normalrule>Each player adds up the remaining</x-card.normalrule>
<x-card.normalrule>health on his Monsters.</x-card.normalrule>
<x-card.normalrule>The player with the highest</x-card.normalrule>
<x-card.normalrule>shuffles his hand into his Library.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
}
};
