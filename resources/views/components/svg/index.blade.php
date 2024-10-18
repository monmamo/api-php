<?php

use Illuminate\View\ComponentAttributeBag;

extract($attributes->getAttributes());

try {
    $center ??= false;
    $dx = (float) ($dx ?? 0);
    $dy = (float) ($dy ?? 0);
    $x = (float) ($x ?? $dx * $width);
    $y = (float) ($y ?? $dy * $height);
    $viewBox ??= "0 0 $width $height";
} catch (\ErrorException $e) {
    dump($attributes->getAttributes());
    throw $e;
}

$svg_attributes = compact('x', 'y', 'width', 'height', 'viewBox');
$svg_attributes['xmlns'] = "http://www.w3.org/2000/svg";
$svg_attributes['xmlns:xlink'] = "http://www.w3.org/1999/xlink";
$svg_attributes['version'] = "1.1";
$svg_attributes['xml:space'] = "preserve";
if (isset($id)) $svg_attributes['id'] = $id;

?>
<svg {{new \Illuminate\View\ComponentAttributeBag($svg_attributes)}}>{{$slot?? null}}</svg>
