@props(['type','fill'=>"#000000", "fillOpacity"=>"1"])
<?php
$id = $type.'-icon';
?>
<x-svg.symbol.icon :$id size="54" baseSize="512" :$fill :$fillOpacity >
    {{ view($type.'.icon') }}
</x-svg.symbol.icon>
