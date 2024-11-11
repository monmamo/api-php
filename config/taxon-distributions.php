<?php

use Canon\Taxons\Angelos;
use Canon\Taxons\Aquos;
use Canon\Taxons\Carmos;
use Canon\Taxons\Cherubos;
use Canon\Taxons\Demonos;
use Canon\Taxons\Energos;
use Canon\Taxons\Faeos;
use Canon\Taxons\Floros;
use Canon\Taxons\Folios;
use Canon\Taxons\Gouros;
use Canon\Taxons\Lumos;
use Canon\Taxons\Psycos;
use Canon\Taxons\Pyros;
use Canon\Taxons\Regos;
use Canon\Taxons\Seraphos;
use Canon\Taxons\Sonos;
use Canon\Taxons\Venenos;
use Canon\Taxons\Zybubos;

return [
    'essential-powers' => [
        'rarity' => 100,
        'taxons' => [
            Aquos::class => 0.1,
            Carmos::class => 0.03,
            Energos::class => 0.1,
            Floros::class => 0.08,
            Folios::class => 0.08,
            Gouros::class => 0.03,
            Lumos::class => 0.1,
            Psycos::class => 0.08,
            Pyros::class => 0.1,
            Regos::class => 0.03,
            Sonos::class => 0.1,
            Venenos::class => 0.08,
        ]],

    'winged-morphotypes' => [
        'rarity' => 1200,
        'taxons' => [
            Faeos::class => 0.2,
            Cherubos::class => 0.03,
            Seraphos::class => 0.03,
            Angelos::class => 0.24, // excludes Cherubos and Seraphos
            Demonos::class => 0.2,
            Zybubos::class => 0.2,
            //\Canon\Taxons\Sphinxos::class=>0.1,
            //\Canon\Taxons\Wyvernos::class=>0.1,
        ],
    ],
];
