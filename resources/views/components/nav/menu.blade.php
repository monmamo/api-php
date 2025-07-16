@props(['title','links'])
<li class="nav-item dropdown">
    <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $title ?></span>
<ul class="dropdown-menu">
@foreach($links as $spec)
<x-nav.menu.item :$spec />
@endforeach
</ul>
</li>
