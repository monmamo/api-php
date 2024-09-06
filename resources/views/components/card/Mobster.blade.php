<?php

return  new
#[\App\GeneralAttributes\Title('Mobster')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::CharacterColor)]
class ('Mobster') extends \App\CardType
{

    use \App\Concerns\ForCardType\Formatting;

    public function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

};
