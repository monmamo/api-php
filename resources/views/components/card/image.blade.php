@props(['online'=>null,'local'=>null,'class'=>null])

<?php
$href = match(true) {
    is_string($online) => $online,
    is_string($local) => \Illuminate\Support\Facades\Storage::disk('images')->imageToUri($local)
};
?>
<image x="0" y="0" class="hero" href="{{$href}}" />