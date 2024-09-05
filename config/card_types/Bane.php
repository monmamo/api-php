<?php
return  new 
#[\App\GeneralAttributes\Title('Bane')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::CalamityColor)]

class('Bane') extends \App\CardType
{
    use \App\Concerns\ForCardType\Formatting;


    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }
};
