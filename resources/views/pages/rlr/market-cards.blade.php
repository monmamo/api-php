<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}


$cards = [
    'LR-14','LR-14','LR-14','LR-14','LR-14', // Rack of Vials
    'LR-15','LR-15', // Pedigree Ledger
    'LR-16','LR-16', // Containment Collar
     ];

?>

<x-card-sheet :abreast="3" :$cards/>
