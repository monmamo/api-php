<?php
return  new 
#[\App\GeneralAttributes\Title('Master')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::CharacterColor)]
class( 'Master')  extends \App\CardType
{
    
    use \App\Concerns\ForCardType\Formatting;

    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

    public static function title(): string
    {
        return '';
    }
};
