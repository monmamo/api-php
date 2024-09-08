@props(['online'=>null,'local'=>null,'class'=>null])

<?php
$href = match(true) {
    is_string($online) => $online,
    is_string($local) => value(function() use($local) {
            $path = resource_path("images/{$local}");
            assert(\file_exists($path), "Image file not found: {$path}");
            return 'data:image/jpg;base64,' . \base64_encode(\file_get_contents($path));
        }),
};
?>
<image x="0" y="0" class="hero" href="{{$href}}" />