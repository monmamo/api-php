<?php
\Laravel\Folio\name('sheet');
?>
<html>
@foreach(array_chunk(explode(',',$list),9) as $chunk)
<x-card-sheet :cards="$chunk"  />
@endforeach
</html>
