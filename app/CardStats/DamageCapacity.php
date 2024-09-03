<?php
namespace App\CardStats;

abstract class DamageCapacity implements \App\CardStat {
    /**
     * 512x512 original.
     */
    public static function icon():\Illuminate\Contracts\Support\Renderable{
        return new class implements \Illuminate\Contracts\Support\Renderable{
            public function render(){
                return <<<SVG
<path d="M196 16a30 30 0 0 0-30 30v120H46a30 30 0 0 0-30 30v120a30 30 0 0 0 30 30h120v120a30 30 0 0 0 30 30h120a30 30 0 0 0 30-30V346h120a30 30 0 0 0 30-30V196a30 30 0 0 0-30-30H346V46a30 30 0 0 0-30-30H196z" ></path>
SVG;
    }
};
    }

}
