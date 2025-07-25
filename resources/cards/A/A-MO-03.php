<?php

// inspiration: Hooligans Jim and Cas PTCG card https://bulbapedia.bulbagarden.net/wiki/Hooligans_Jim_%26_Cas_(Dark_Explorers_95)

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Enforcer')]
#[Concept('Mobster')]
#[Concept('Male')]
#[Concept('Integrity', '1d4')]
#[Concept('DamageCapacity', 14)]
#[Concept('Size', 5)]
#[Concept('Speed', 4)]
#[IsGeneratedImage]
#[ImageIsPrototype]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>A072.png</x-card.hero.local>

<x-card.cardrule y="500" height="55" >
<x-card.ruleline>{{\trans_choice('rules.player-limit', 1)}}</x-card.ruleline>
</x-card.cardrule>

<x-card.phaserule type="Upkeep" >
<text >
<x-card.ruleline>You may choose a random card</x-card.ruleline>
<x-card.ruleline>from an opponent's hand.</x-card.ruleline>
<x-card.ruleline>The opponent must reveal that card to</x-card.ruleline>
<x-card.ruleline>all players. You may have that player discard</x-card.ruleline>
<x-card.ruleline>that card or shuffle it back into their Library.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
