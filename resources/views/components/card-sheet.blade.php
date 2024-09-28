@props(['cards'])
<?php
    $dx = 0;
    $dy = 0;

//TODO Chunk the cards into pages.

//TODO Iterate over the pages.
?>
<html>
    @foreach(array_chunk($cards, 9) as $chunk)
<svg width="7.5in" height="10.5in" viewBox="0 0 2250 3150" xmlns="http://www.w3.org/2000/svg">

    <x-card.common />

    <?php
    foreach($chunk as $index => $cardNumber)   {
        $card_number_object =  \App\CardNumber::make($cardNumber);
$spec = require $card_number_object->getSpecFilePath();
$dx = $index % 3;
$dy = floor($index / 3);
?>
<x-card :$cardNumber :$spec :$dx :$dy :omit-common="true" />
<?php
    }
?>

</svg>
@endforeach {{-- chunk --}}
</html>