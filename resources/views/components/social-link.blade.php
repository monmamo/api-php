@props(['slug'])
<?php
$config = config('external.'.$slug);
?>
<a href="{{$config['url']}}" target="_blank" rel="noopener noreferrer" aria-label="Monsters Masters & Mobsters on {{$config['name']}}">{{$slot}}</a>
