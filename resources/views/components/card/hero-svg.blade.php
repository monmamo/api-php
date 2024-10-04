@props(['width','viewBox'])
<?php
$height = config('card-design.hero.height');
$x = (config('card-design.hero.width')-$width)/2;
?>
<x-svg id="hero" :$x :$height :$width :$viewBox>{{$slot}}</x-svg>
