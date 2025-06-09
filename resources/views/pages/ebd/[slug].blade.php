<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}
?>
<x-card-sheet :abreast="3" :cards="'games.ebd.cards.'.$slug" :distinct="isset($_REQUEST['distinct'])"/>
