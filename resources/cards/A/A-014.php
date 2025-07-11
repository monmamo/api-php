<?php

use App\CardAttributes\DefaultCardAttributes;
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
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>A-014.jpg</x-card.hero.local>

<x-card.flavortext>Expect more. Live better. Simplify life. Get more done.</x-card.flavortext>

<x-card.phaserule type="Draw" ><text>
<x-card.ruleline>Discard 3 cards from your hand.</x-card.ruleline>
<x-card.ruleline>Search your Library for 2 Item cards.</x-card.ruleline>
<x-card.ruleline>Reveal them, then put them in your hand.</x-card.ruleline>
<x-card.ruleline>Shuffle your library. Then put</x-card.ruleline>
<x-card.ruleline>this card on the bottom of your library.</x-card.ruleline>
</text></x-card.phaserule>

HTML;
        }
    };
