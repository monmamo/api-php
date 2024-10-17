<?php

namespace App\Taxons;

use App\Contracts\Taxon;

class Aquadys implements Taxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Lives in the water and is adapted for prolonged time submerged.

// ,"Campos , Cetos ",Aquadyr,Aquadyquin,Aquadyx,Aquadyander,
