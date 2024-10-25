@props(['items'])
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    @foreach($items as $url => $title)
    <li class="breadcrumb-item"><a href="{{$url}}">{{$title}}</a></li>
    @endforeach
  </ol>
</nav>
