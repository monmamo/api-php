@props(['title','links'])
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $title ?></a>
<ul class="dropdown-menu">
@foreach($links as $spec)
<x-nav.menu.item :$spec />
@endforeach
</ul>
</li>
