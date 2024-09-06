<?php
return  new
#[\App\GeneralAttributes\Title('Monster')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::CharacterColor)]
class('Monster') extends \App\CardType
{

    use \App\Concerns\ForCardType\Formatting;


    public function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

};
