<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\Prerequisites;
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
#[Prerequisites(['Limit 1 per player on Battlefield.', 'You must already have a Master on the Battlefield', 'to put this card on the Battlefield.', 'You may choose to make this card Female', 'when you put it on the Battlefield.'])]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A189.jpg</x-card.hero.local> 

    <x-card.cardrule lines="6">
<x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
<x-card.smallrule>You must already have a Master on the Battlefield</x-card.smallrule>
<x-card.smallrule>to put this card on the Battlefield.</x-card.smallrule>
<x-card.smallrule>You may choose to make this card Female</x-card.smallrule>
<x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
<x-card.normalrule>You may put the Attack cards you use</x-card.normalrule>
<x-card.normalrule>back in your hand.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
