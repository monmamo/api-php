<?php
return  new
    #[\App\GeneralAttributes\Title('')]
    #[\App\CardType("")]
    class extends \App\Card {


        public function bodyText(): \Traversable
        {
            yield "";
        }
        public function flavorText(): \Traversable
        {
            return new \EmptyIterator;
        }
    };
