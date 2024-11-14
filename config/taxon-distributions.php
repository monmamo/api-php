<?php

use App\DistributionArray;
use Canon\Taxons\Angelos;
use Canon\Taxons\Anthros;
use Canon\Taxons\Aquadys;
use Canon\Taxons\Aquos;
use Canon\Taxons\Carabos;
use Canon\Taxons\Carmos;
use Canon\Taxons\Cherubos;
use Canon\Taxons\Demonos;
use Canon\Taxons\Energos;
use Canon\Taxons\Faeos;
use Canon\Taxons\Flegeros;
use Canon\Taxons\Floros;
use Canon\Taxons\Folios;
use Canon\Taxons\Gouros;
use Canon\Taxons\Hominos;
use Canon\Taxons\Lumos;
use Canon\Taxons\Meffitos;
use Canon\Taxons\Papilos;
use Canon\Taxons\Pilos;
use Canon\Taxons\Psycos;
use Canon\Taxons\Pyros;
use Canon\Taxons\Quilos;
use Canon\Taxons\Rasos;
use Canon\Taxons\Regos;
use Canon\Taxons\Rodentos;
use Canon\Taxons\Seraphos;
use Canon\Taxons\Silvadys;
use Canon\Taxons\Sonos;
use Canon\Taxons\Spinos;
use Canon\Taxons\Stegos;
use Canon\Taxons\Troglodys;
use Canon\Taxons\Ungulos;
use Canon\Taxons\Venenos;
use Canon\Taxons\Vitos;
use Canon\Taxons\Zybubos;

return [
    'phyla' => [
        'rarity' => 1,
        'taxons' => new DistributionArray([
            Hominos::class => 0.1,
            Ungulos::class => 0.2,
            Rodentos::class => 0.4,
            Silvadys::class => 0.4,
            Aquadys::class => 0.2,
            Troglodys::class => 0.05,
        ]),
    ],
    'size' => [
        'taxons' => [
            'Pygmys' => 0.25,
            'Megos' => 0.1,
            'Gigantos' => 0.06,
            'Titanos' => 0.01,
        ],
    ],
    'powers' => [
        'rarity' => 100,
        'taxons' => new DistributionArray([
            Aquos::class => 0.1,
            Carmos::class => 0.03,
            Energos::class => 0.1,
            Floros::class => 0.07,
            Folios::class => 0.07,
            Vitos::class => 0.07,
            Gouros::class => 0.03,
            Lumos::class => 0.1,
            Psycos::class => 0.07,
            Pyros::class => 0.1,
            Regos::class => 0.02,
            Sonos::class => 0.1,
            Venenos::class => 0.08,
            Meffitos::class => 0.01,
            Vitos::class => 0.01,
        ]),
    ],

    'body-covering' => [
        'rarity' => 2,
        'taxons' => new DistributionArray([
            Pilos::class => 0.4,
            Quilos::class => 1e-4,
        ]),
    ],

    'spinal-morphotypes' => [
        'rarity' => 400,
        'taxons' => new DistributionArray([
            Anthros::class => 0.05,
            Carabos::class => 0.2,
            Rasos::class => 0.2,
            Stegos::class => 0.2,
            Spinos::class => 0.2,
        ]),
    ],

    'winged-morphotypes' => [
        'rarity' => 1200,
        'taxons' => new DistributionArray([
            Faeos::class => 0.2,
            Angelos::class => 0.4, // Cherubos and Seraphos are subtypes
            Demonos::class => 0.2,
            Zybubos::class => 0.1,
            Papilos::class => 0.1,
            Flegeros::class => 0.2,
        ]),
    ],
];
