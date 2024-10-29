<?php
$width = request()->input('width', config('card-design.width'));
?>
<x-card :cardNumber="$card_number" :$width />
