<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Kitpony')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('Level', 48)]
    #[Concept('DamageCapacity', 23)]
    #[Concept('Size', 7)]
    #[Concept('Speed', 4)]
    #[Concept('Boost', 4)]
    #[Concept('Cost', 9)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>hero/Kitpony.jpg</x-card.hero.local>

    <x-card.taxons>Felequos</x-card.taxons>
HTML;
    }
};
