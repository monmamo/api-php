<?php

use App\Card\BasicElementalManaCard;

return new BasicElementalManaCard(
    path: __FILE__,
    svg: \view('Pyros.icon'),
    title: 'Fire',
    imageCredit: 'Icon by Carl Olsen under CC BY 3.0 on Game-Icons.Net',
);
