{{--
DERECATED
  use \App\CardAttributes\CardTools;
   yield $this->svgHeroImage('FILE.jpg');
--}}


@props(['scale'=>1,'viewBox'=>'0 0 512 512','y'=>70])
<?php
$height = config('card-design.hero.height')*$scale;
$width = config('card-design.hero.width')*$scale;
$x = (config('card-design.hero.width')-$width)/2;
?>
<x-svg id="hero" :$x :$y :$height :$width :$viewBox>{{$slot}}</x-svg>
