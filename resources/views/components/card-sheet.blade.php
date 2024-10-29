@props(['cards','distinct_cards'])
<?php
$distinct_cards ??= $cards;
$dx = 0;
$dy = 0;
?>
<svg width="7.5in" height="10.5in" viewBox="0 0 2250 3150" xmlns="http://www.w3.org/2000/svg">

    <x-card.common :specs="$distinct_cards" />

    <?php
    foreach ($cards as $index => $cardNumber) {
        $dx = $index % 3;
        $dy = floor($index / 3);
        ?>
        <x-card :$cardNumber :$dx :$dy :omit-common="true" />
    <?php
    }
    ?>
</svg>
