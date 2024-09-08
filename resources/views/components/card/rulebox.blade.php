@props(['y'=>550])

<text x="50%" y="{{$y}}" width="100%" height="auto" filter="url(#solid)">
    <?php foreach (\App\Strings\explode_lines( $small ?? '') as $index => $line) { ?>
        <tspan x="50%" dy="25" class="smallrule" ><?= $line ?></tspan>
    <?php } ?>
    <?php foreach (\App\Strings\explode_lines( $normal ?? '') as $index => $line) { ?>
        <tspan x="50%" dy="35" class="bodytext" ><?= $line ?></tspan>
    <?php } ?>
</text>
