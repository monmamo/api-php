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
            <?php
            foreach($links as $href => $label) {
                if ($href[0] === '/') {
                    $a_attributes = ['href' => $href];
                } else {
                    $a_attributes = ['hx-get' => "/fragment/$href", 'hx-target' => 'div#content', 'hx-trigger' => 'click'];
                }
                echo '<li><a ' . implode(' ', array_map(fn($k, $v) => "$k=\"$v\"", array_keys($a_attributes), $a_attributes)) . ' class="link-body-emphasis d-inline-flex text-decoration-none rounded">' . $label . '</a></li>';
            }
?>
        </ul>
    </div>
</li>
