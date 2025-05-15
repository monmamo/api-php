<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Can of Paint')]
    #[Concept('Item')]
    #[Concept('Weapon')]
    #[IsGeneratedImage]
    #[ImageIsPrototype]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield '<x-card.hero.local>hero/A-W-13.png</x-card.hero.local>';

            yield <<<'HTML'

<x-card.flavortext>Cover the earth. Eh, just your enemies.</x-card.flavortext>

<x-card.cardrule lines="5">
<x-card.normalrule>If unopened: does 6 damage. </x-card.normalrule>
<x-card.normalrule>Roll 1d6. If @dieroll(1,2), the can "opens."</x-card.normalrule>
<x-card.normalrule>Henceforth, reduce Speed of all Characters</x-card.normalrule>
<x-card.normalrule>on the targeted team by 2.</x-card.normalrule>
<x-card.normalrule>Also henceforth, does only 1 @damage when used.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
