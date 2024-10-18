@props(['title','links'])
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $title ?></a>
<ul class="dropdown-menu">
@foreach($links as $spec)
<li><a class="dropdown-item" href="<?= $spec[0] ?>"><?= $spec[1] ?></a></li>
@endforeach
</ul>
</li>
