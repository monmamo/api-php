<?= view('Character.gradient-background') ?>
<?php
$transform = \App\Providers\BladeServiceProvider::transformCenteredIcon(
    original_size:512,
    new_size:1100,
    width:config('card-design.width')
);

?>
<g transform="translate(<?= $transform['translate'] ?>,0) scale(<?= $transform['scale'] ?>)" fill="{{\App\Enums\Color::Mobster}}" fill-opacity="0.75">{{ view('Mobster.icon') }}
</g>
