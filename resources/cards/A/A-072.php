<?php

// inspiration: Hooligans Jim and Cas PTCG card https://bulbapedia.bulbagarden.net/wiki/Hooligans_Jim_%26_Cas_(Dark_Explorers_95)

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Enforcer')]
#[Concepts('Mobster', 'Male', 'Integrity:1d4')]
#[IsGeneratedImage]
#[LocalHeroImage('A072.png')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-slot:small>
Limit 1 per player on the Battlefield.
</x-slot:small>
<x-card.phaserule type="Upkeep" y="170" height="130">
<text >
<x-card.normalrule>You may choose a random card</x-card.normalrule>
<x-card.normalrule>from an opponent's hand. The opponent </x-card.normalrule>
<x-card.normalrule>must reveal that card to all players.</x-card.normalrule>
<x-card.normalrule>You may have that player discard that card</x-card.normalrule>
<x-card.normalrule>or shuffle it back into their Library.        </x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
