<?php

use Illuminate\View\ComponentAttributeBag;

extract($attributes->getAttributes());

try {
    $width ??=  $size;
    $height ??=  $size;
    $center ??= false;
    $padding ??= 0;
    $dx = (float) ($dx ?? 0);
    $dy = (float) ($dy ?? 0);
    $x = (float) ($x ?? $dx * ($width + $padding)) ;
    $y = (float) ($y ?? $dy * ($height+ $padding));
    $viewBox ??= match(true) {
        isset($icon) => "0 0 512 512",
        default => "0 0 $width $height"
    };
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
if (isset($class)) $svg_attributes['class'] = $class;

$content = match(true) {
    isset($icon) => \App\Strings\html('g',['fill'=>'#000000'], view("icons.$icon")),
    isset($slot) => $slot,
    default => null,
}

?>
<svg {{new \Illuminate\View\ComponentAttributeBag($svg_attributes)}}>{{$content}}</svg>
