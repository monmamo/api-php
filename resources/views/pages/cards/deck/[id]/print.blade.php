<?php
\Laravel\Folio\name('deck.print');

// Serialize the listing to an array for x-card-sheet.
$cards = [];
$distinct_cards = [];
foreach(config('decks.'.$id.'.cards') as $card_number => $count) {
    $distinct_cards[] =  \App\Card\make($card_number);
    for ($i = 0; $i < $count; $i++) {
        $cards[] = $card_number;
    }
}

?>
<html>
@foreach(array_chunk($cards, 9) as $chunk)
<x-card-sheet :cards="$chunk" :distinct_cards="$distinct_cards" />
@endforeach
</html>
