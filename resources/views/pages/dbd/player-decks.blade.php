<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);


$card_generator = function():\Traversable {
    for($player = 1; $player <= 6; $player++) {
        for($i = 0; $i < 9; $i++) {
            yield 'A-DB-01';
        }
        yield 'A-DB-06';
    }
};

$cards = [...$card_generator()];
}
//  
?>
<x-card-sheet :abreast="3" :$cards />
