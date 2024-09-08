@props(['y'=>null])
<?php
$lines = iterator_to_array(\App\Strings\explode_lines( $slot ?? '') );
$y ??= config('card-design.bodytext.y')+config('card-design.bodytext.height')/2-config('card-design.bodytext.line-height')*count($lines)/2;
?>
<text x="50%" y="{{$y}}" width="100%" height="auto" filter="url(#solid)">
    <?php foreach ($lines as $index => $line) { ?>
        <tspan x="50%" dy="@bodytextspec(line-height)" class="bodytext"><?= $line ?></tspan>
    <?php } ?>
</text>
