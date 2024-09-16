@props(['slug'])
<?php
$new_attributes = [
    'class' => $slug,
    'id' => $slug.'-rect',
    'x' => config("card-design.$slug.x"),
    'y' => config("card-design.$slug.y"),
    'width' => config("card-design.$slug.width"),
    'height' =>config("card-design.$slug.height"),
];
?>
<rect  {{ $attributes->merge($new_attributes ) }} />
