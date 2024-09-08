@props(['ai'=>false])
<?php
$text = match(true) {
    $ai => 'Generated image',
    default => 'Image by '.$slot,
};
?>
<text x="50%" y="-10" class="credit" text-anchor="middle" alignment-baseline="bottom">{{$text}}</text>
