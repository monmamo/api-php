<?php
$x ??= $dx*$width;
$y ??= $dy*$height;
$viewBox ??= "0 0 $width $height";

$attributes = compact('x','y','width','height','viewBox');
$attributes['xmlns']="http://www.w3.org/2000/svg";
if (!is_null($id)) $attributes['id'] = $id;


?>
<svg {{new \Illuminate\View\ComponentAttributeBag($attributes)}}>{{$slot?? null}}</svg>