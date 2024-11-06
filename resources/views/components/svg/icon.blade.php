@props(['id','size','fill'=>"#000000", "fillOpacity"=>"1",'padding'=>2,'viewBox'=>"0 0 512 512"])
<?php
$size = (int) $size;
$width = $size+$padding+$padding;
?>
<svg id="<?= $id ?>"  width="<?= $width ?>" height="<?= $width ?>" viewBox="<?= $viewBox ?>">
<g fill="<?= $fill ?>" fill-opacity="<?= $fillOpacity ?>">
   {{ $slot}}
</g>
</svg>

