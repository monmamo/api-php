<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/express-truck-delivering-goods-supermarket_4147963.htm

return new
#[Title('Big-Box Store')]
    #[Concept('Vendor')]
#[Concept('Integrity', '1d4')]
    #[ImageCredit('Image by teravector on Freepik')]
    #[FlavorText('Expect more. Live better. Simplify life. Get more done.')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
                <x-card.hero.local>A-014.jpg</x-card.hero.local>

<x-card.phaserule type="Draw" lines="5"><text>
<x-card.normalrule>Discard 3 cards from your hand.</x-card.normalrule>
<x-card.normalrule>Search your Library for 2 Item cards.</x-card.normalrule>
<x-card.normalrule>Reveal them, then put them in your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle your library. Then put</x-card.normalrule>
<x-card.normalrule>this card on the bottom of your library.</x-card.normalrule>
</text></x-card.phaserule>

HTML;
        }
    };
