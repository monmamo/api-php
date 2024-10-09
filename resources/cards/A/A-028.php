<?php

use App\CardAttributes\CreditColor;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Concept('Mana')]
    #[CreditColor('#000000')]
    #[FlavorText(lines: 'Because both adulting and monster battling are hard.', color: '#000000')]
    #[ImageCredit('Image by macrovector on Freepik')]
    #[ImagePrompt('cup of coffee')]
    #[Title('Caffeine')]
    class implements CardComponents
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
<x-card.cardrule height="200" background-opacity="0" >
<x-card.normalrule>For any attempt to put this Monster to Sleep,</x-card.normalrule>
<x-card.normalrule>roll 1d6. (Roll one die for each</x-card.normalrule>
<x-card.normalrule>Caffeine card attached to this Monster.)</x-card.normalrule>
<x-card.normalrule>@dieroll(5,6) The Monster remains awake.</x-card.normalrule>
<x-card.normalrule>@dieroll(1,2) Discard this card.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
