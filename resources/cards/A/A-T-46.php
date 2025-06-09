<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// 'image-prompt' => 'https://www.freepik.com/free-vector/boy-with-bad-breath-cartoon-character_19734647.htm#fromView=search&page=1&position=18&uuid=b8d1044b-7fd0-4b95-b59a-32d51461ba3f',

return new
#[IsIncomplete]
#[Title('Fetor')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Someone please give that monster a bath.</x-card.flavortext>

<x-card.cardrule lines="6">
<x-card.ruleline>Fetor Strength: 1d6</x-card.ruleline>
<x-card.ruleline>(rolled at attach; can be increased by Power Up)</x-card.ruleline>
<x-card.ruleline>Reduce damage done by any</x-card.ruleline>
<x-card.ruleline>Monsters' Attacks by Fetor Strength.</x-card.ruleline>
<x-card.ruleline>Reduce damage prevented by any</x-card.ruleline>
<x-card.ruleline>Monsters' Defenses by Fetor Strength.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
