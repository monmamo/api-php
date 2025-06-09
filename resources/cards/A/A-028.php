<?php

use App\CardAttributes\CardNameColor;
use App\CardAttributes\CreditColor;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[CreditColor('#000000')]
#[CardNameColor('#000000')]
    #[FlavorText(lines: 'Because both adulting and monster battling are hard.', color: '#000000')]
    #[ImageCredit('Image by macrovector on Freepik')]
    #[ImagePrompt('cup of coffee')]
    #[Title('Caffeine')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        /**
         * @implements \App\Contracts\Card\CardComponents::background
         */
        public function background(): \Traversable
        {
            // https://www.freepik.com/free-vector/realistic-cup-black-brewed-coffee-saucer-vector-illustration_23128948.htm"
            yield \App\Strings\html(
                'image',
                ['x' => 0, 'y' => 0,  'href' => \App\Card\localHeroUri('A028-full.jpg')],
            );
        }

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule  background-opacity="0" >
<x-card.ruleline>For any attempt to put this Monster to Sleep,</x-card.ruleline>
<x-card.ruleline>roll 1d6. (Roll one die for each</x-card.ruleline>
<x-card.ruleline>Caffeine card attached to this Monster.)</x-card.ruleline>
<x-card.ruleline>@dieroll(5,6) The Monster remains awake.</x-card.ruleline>
<x-card.ruleline>@dieroll(1,2) Discard this card.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
