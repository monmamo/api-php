<?php
$articles = [ 'pokemon-for-adults','hello-world']; //
?>
<x-guest-layout>

<h1>News and Commentary</h1>

 <?php
foreach($articles as $article) {
$view = view('articles.'.$article);
?>
<div class="card mb3">
<div class="row g-0">
<div class="col-md-4">
<a href="/news/<?= $article ?>"><img src="<?= $view->fragment('hero') ?>" class="img-fluid rounded-start" alt="<?= $view->fragment('hero-alt') ?>"></a>
</div>
<div class="col-md-8">
    <div class="card-body">
    <h5 class="card-title"><a href="/news/<?= $article ?>"><?= $view->fragment('title') ?></a></h5>
    <p class="card-text"><?= $view->fragment('summary') ?></p>
    <p class="card-text"><small class="text-body-secondary"><?= $view->fragment('byline') ?></small></p>
    </div>
</div>
</div>
</div>
<?php
}
?>
</x-guest-layout>
