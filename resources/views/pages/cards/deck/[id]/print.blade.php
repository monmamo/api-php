<?php
\Laravel\Folio\name('deck.print');
$deck = new \Canon\Deck($id);
?>
<html>
@foreach($deck->chunk( 9) as $chunk)
<x-card-sheet :cards="$chunk" :distinct_cards="$deck->distinctCards" />
@endforeach
</html>
