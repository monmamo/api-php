<?php

use App\Card\BasicElementalManaCard;

return new BasicElementalManaCard(
    path: __FILE__,
    svg: \view('Energos.icon'),
    title: 'Electricity',
    imageCredit: 'Icon by Lorc under CC BY 3.0 on Game-Icons.Net',
);
