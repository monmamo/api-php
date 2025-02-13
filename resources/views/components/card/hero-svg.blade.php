@props(['scale'=>1,'viewBox'=>'0 0 512 512','y'=>0])
<?php
$height = config('card-design.hero.height')*$scale;
$width = config('card-design.hero.width')*$scale;
$x = (config('card-design.hero.width')-$width)/2;
?>
<x-svg id="hero" :$x :$y :$height :$width :$viewBox>{{$slot}}</x-svg>
