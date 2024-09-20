<?php

namespace App;

class CardCollection extends \ArrayObject
{
    public function __construct(
        $set = '*',
        $id = '*'
    ) {
        parent::__construct();

        $set_string = match (true) {
            is_string($set) => $set,
            $set instanceof \App\Enums\CardSet => $set->value,
            is_null($set) => '*',
            $set === true => '*',
        };


        $id_string = match (true) {
            is_string($id) => $id,
            is_null($id) => '*',
            $id === true => '*',
        };

        foreach ($files as $filepath) {
            if ($filepath[0] === '_') {
                continue;
            }
            
            $this[ str_replace('.blade','',pathinfo($filepath,PATHINFO_FILENAME)) ] = \App\View\Components\Card::byPath($filepath );
        }
    }
}
