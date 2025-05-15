<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}


$card_generator = function():\Traversable {
    for($player = 1; $player <= 6; $player++) {
       foreach(config('games.rlr.player-deck') as $card => $count) {
            for($i = 0; $i < $count; $i++) {
                yield $card;
            }
        }
    }
};

$cards = [...$card_generator()];

?>

<x-card-sheet :abreast="3" :$cards/>
