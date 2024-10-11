<?php
// Serialize the listing to an array for x-card-sheet.
$cards = [];
foreach(config('decks.'.$id.'.cards') as $card_number => $count) {
    for ($i = 0; $i < $count; $i++) {
        $cards[] = $card_number;
    }
}
?>
<x-card-sheet :$cards />
