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

        $jsonFiles = glob(resource_path("cards/{$set_string}/{$id_string}.json"));

        foreach ($jsonFiles as $file) {
            if ($file[0] === '_') {
                continue;
            }
            $this[ pathinfo($file, PATHINFO_FILENAME)] = new Card(path: $file);
        }
    }
}
