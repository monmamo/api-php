<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-photo/football-trainer-teaching-his-pupils_32248887.htm

return new
    #[Title('Offensive Coordinator')]
    #[Concept('Coach')]
    #[Concept('Male')]
    #[Concept('Integrity', '1d6')]
    #[IsGeneratedImage('head coach standing on the sidelines with a clipboard, green jacket')]
    #[ImageIsPrototype]
#[Concept('Training', 3)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A189.jpg</x-card.hero.local> 

    <x-card.cardrule lines="6">
<x-card.ruleline class="smallrule">{{\trans_choice('rules.player-limit', 1)}}</x-card.ruleline>
<x-card.ruleline class="smallrule">You must already have a Master on the Battlefield</x-card.ruleline>
<x-card.ruleline class="smallrule">to put this card on the Battlefield.</x-card.ruleline>
<x-card.ruleline class="smallrule">You may choose to make this card Female</x-card.ruleline>
<x-card.ruleline class="smallrule">when you put it on the Battlefield.</x-card.ruleline>
<x-card.ruleline>You may put the Attack cards you use</x-card.ruleline>
<x-card.ruleline>back in your hand.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
