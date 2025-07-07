@props(['color','foreground'] )
<?php
$color_enum = \App\Enums\Color::resolve($color) ;
$foreground ??= $color_enum->contrastColor();
?>
<span class="badge" style="color: {{ $foreground }}; background-color: {{ $color_enum->value }};">{{ $color }}</span>