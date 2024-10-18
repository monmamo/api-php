<?php

$view = view('articles.'.$article);
?>
<x-guest-layout>
<picture>
<img class="img-fluid" src="<?= $view->fragment('hero') ?>" >
</picture>
<h2 class="text-center"><?= $view->fragment('title') ?></h2>
<p class="text-center"><?= $view->fragment('byline') ?></p>
<hr />
<?= $view->fragment('content') ?>
</x-guest-layout>
