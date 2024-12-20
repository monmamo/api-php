<?php

namespace App;

use App\Enums\CardSet;
use App\View\Components\Card;

class CardCollection extends \ArrayObject
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group nonary|unary|variadic
     *
     * @uses parent::__construct
     *
     * @return void
     */
    public function __construct(
        $set = '*',
        $id = '*',
    ) {
        parent::__construct();

        $set_string = match (true) {
            \is_string($set) => $set,
            $set instanceof CardSet => $set->value,
            \is_null($set) => '*',
            $set === true => '*',
        };

        $id_string = match (true) {
            \is_string($id) => $id,
            \is_null($id) => '*',
            $id === true => '*',
        };

        foreach ($files as $filepath) {
            if ($filepath[0] === '_') {
                continue;
            }

            $this[\str_replace('.blade', '', \pathinfo($filepath, \PATHINFO_FILENAME))] = Card::byPath($filepath);
        }
    }
}
