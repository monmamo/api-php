<?php
return  new 

#[\App\GeneralAttributes\Title('Bystander')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::CharacterColor)]

class ('Bystander') extends \App\CardType
{
    use \App\Concerns\ForCardType\Formatting;


    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

};
