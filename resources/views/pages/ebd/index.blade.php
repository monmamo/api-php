<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}


?>
