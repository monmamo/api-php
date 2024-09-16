@props(['ai'=>false])
<?php
$text = match(true) {
    $ai => 'Generated image',
    default => $slot,
};
?>
<text x="50%" y="50" class="credit" text-anchor="middle" alignment-baseline="baseline">{{$text}}</text>
