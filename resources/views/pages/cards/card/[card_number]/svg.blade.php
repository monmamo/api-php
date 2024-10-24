<?php
$spec = \App\Card\make($card_number);
$width = request()->input('width', config('card-design.width'));
?>
<x-card :cardNumber="$card_number" :$width :$spec />
