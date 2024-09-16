@props(['id','size','baseSize','fill'=>"#000000", "fillOpacity"=>"1",'padding'=>2])
<?php
$size = (int) $size;
$baseSize = (int) $baseSize;
$width = $size+$padding+$padding;
?>
<symbol id="<?= $id ?>"  width="<?= $width ?>" height="<?= $width ?>" viewBox="0 0 <?= $width ?> <?= $width ?>">
<g transform="scale(<?= $size/$baseSize ?>)" fill="<?= $fill ?>" fill-opacity="<?= $fillOpacity ?>">
   {{ $slot}}
</g>
</symbol>
