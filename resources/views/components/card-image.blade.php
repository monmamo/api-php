@props(['cardNumber','size'])
<?php
$sizes = [
    125=>[150,200],
    250=>[300,400],
];
//<object data="/cards/card/{{$cardNumber}}/svg?width={{$size}}" width="{{$sizes[$size][0]}}" height="{{$sizes[$size][1]}}"></object></a>

?>
<a href="/cards/card/{{$cardNumber}}"><x-card :$cardNumber :width="$size" /></a>
    
