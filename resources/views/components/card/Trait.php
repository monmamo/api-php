<?php
return  new
#[\App\GeneralAttributes\Title('Trait')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::TraitColor)]
class ('Trait') extends \App\CardType
{
    use \App\Concerns\ForCardType\Formatting;

    public function standardRule(): \Traversable
    {
        yield 'This card can be attached to a Monster card only';
        yield 'during the Setup Phase or when the card comes into play';
        yield 'from the hand, Library or Discard. A Monster may have';
        yield 'only one of any particular Trait card.';
    }

};
