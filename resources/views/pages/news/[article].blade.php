<?php

$view = view('articles.'.$article);
$hero = $view->fragment('hero');
?>
<x-guest-layout>
    @if($hero !== '')
<picture>
<img class="img-fluid" src="<?= $hero ?>" >
</picture>
@endif
<h2 class="text-center"><?= $view->fragment('title') ?></h2>
<p class="text-center"><?= $view->fragment('byline') ?></p>
<hr />
<?= $view->fragment('content') ?>
</x-guest-layout>
