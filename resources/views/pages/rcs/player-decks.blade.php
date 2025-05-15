<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}


$card_generator = function():\Traversable {
    for($player = 1; $player <= 6; $player++) {
        for($i = 0; $i < 6; $i++) {
            yield 'RC-01';
        }
        for($i = 0; $i < 3; $i++) {
            yield 'RC-02';
        }
        yield 'RC-03';
    }
};

$cards = [...$card_generator()];

?>

<x-card-sheet :abreast="3" :$cards/>
