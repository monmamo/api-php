@props(['title','links'])
<?php
$id = uniqid();
?>

<li class="mb-1">
    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#<?= $id ?>-collapse" aria-expanded="false">
        <?= $title ?>
    </button>
    <div class="collapse" id="<?= $id ?>-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            @foreach($links as $href => $label)
            <li><a href="<?= $href ?>" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><?= $label ?></a></li>
            @endforeach
        </ul>
    </div>
</li>
