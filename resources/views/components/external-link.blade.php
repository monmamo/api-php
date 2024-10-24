@props(['href'])
<?php
$href_parsed = parse_url($href);
$favicon_url = sprintf(config('favicon-providers.duckduckgo'),$href_parsed['host']);
?>
<a href="{{$href}}" target="_blank" rel="noopener noreferrer">
    <img src="{{$favicon_url}}">
{{$slot}}</a>
