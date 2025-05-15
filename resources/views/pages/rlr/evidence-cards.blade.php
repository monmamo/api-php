<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}
?>
<x-card-sheet :abreast="3" cards="games.rlr.evidence-cards"/>
