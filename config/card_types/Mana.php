<?php
return  new #[\App\GeneralAttributes\Title('Mana')] class('Mana') extends \App\CardType
{

    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

 };
