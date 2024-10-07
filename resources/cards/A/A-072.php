<?php

// inspiration: Hooligans Jim and Cas PTCG card https://bulbapedia.bulbagarden.net/wiki/Hooligans_Jim_%26_Cas_(Dark_Explorers_95)

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Enforcer')]
#[Concept('Mobster')]
#[Concept('Male')]
#[Concept('Integrity', '1d4')]
#[IsGeneratedImage]
#[LocalHeroImage('A072.png')]
#[Prerequisites(y: 460, lines: ['Limit 1 per player on the Battlefield.'])]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Upkeep" lines="5">
<text >
<x-card.normalrule>You may choose a random card</x-card.normalrule>
<x-card.normalrule>from an opponent's hand.</x-card.normalrule>
<x-card.normalrule>The opponent  must reveal that card to.</x-card.normalrule>
<x-card.normalrule>all players. You may have that player discard</x-card.normalrule>
<x-card.normalrule>that card or shuffle it back into their Library.        </x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
