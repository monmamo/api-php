<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\RaceForTheChampionshipAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Setback')]

#[ImageCredit('Icon by Lorc on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;
    use RaceForTheChampionshipAttributes { RaceForTheChampionshipAttributes::system insteadof DefaultCardAttributes; }

    /**
     * @group nonary
     */
    public function background(): \Traversable
    {
        yield <<<'HTML'
<x-linear-gradient-background base="Bane" />
<defs><pattern id="bane-pattern" width="20" height="20" patternTransform="scale(2)" patternUnits="userSpaceOnUse">
    <path fill="#794c00" d="M18.822 18.717s.077-1.396-.737-2.21c-.813-.813-2.21-.736-2.21-.736s-.076 1.396.737 2.21c.814.813 2.21.736 2.21.736m0-17.643s-1.396-.077-2.21.736c-.813.814-.736 2.21-.736 2.21s1.396.077 2.21-.736c.813-.814.736-2.21.736-2.21M3.389 17.98c.813-.813.736-2.21.736-2.21s-1.396-.076-2.21.737c-.813.814-.736 2.21-.736 2.21s1.396.077 2.21-.737m.736-13.96s.077-1.396-.736-2.21c-.814-.813-2.21-.736-2.21-.736s-.077 1.396.736 2.21c.814.813 2.21.736 2.21.736"/>
</pattern>
</defs>
<x-card.background fill="url(#bane-pattern)" />
HTML;
    }

    public function content(): \Traversable
    {
        yield <<<'HTML'

<x-card.flavortext></x-card.flavortext>

<x-card.hero.svg ><g fill="#ffffff">{{ view('Setback.icon') }}</g></x-card.hero.svg >

<x-card.cardrule lines="4">
<x-card.normalrule>Draw a Setback card from the Setback deck.</x-card.normalrule>
<x-card.normalrule>Play it immediately.</x-card.normalrule>
<x-card.normalrule>Then return the card to the</x-card.normalrule> 
<x-card.normalrule>bottom of the Setback deck.</x-card.normalrule>
</x-card.cardrule>


HTML;
    }
};
