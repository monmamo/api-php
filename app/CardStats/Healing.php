<?php
namespace App\CardStats;

abstract class Healing implements \App\CardStat {
    /**
     * 512x512 original.
     */
    public static function icon():\Illuminate\Contracts\Support\Renderable{
        return new class implements \Illuminate\Contracts\Support\Renderable{
            public function render(){
        return <<<SVG
<path d="M250.9 18.9c-23.9 2.99-45.3 30.65-45.3 66.99 0 19.91 6.8 37.41 16.8 49.61l12.2 14.5-18.7 3.5c-13 2.5-22.6 9.5-30.7 20.8-8.5 11.5-14.8 26.9-19.1 45.2-8 32.7-9.9 72.7-9.9 108.2h43.6l11.7 160.5c30.4 7 63.1 6.5 92.3 0l10.7-160.5H356c0-35.7-.5-76.4-7.8-109.7-3.9-17.9-10-33.7-18.2-45.1-8.2-11.1-18.5-17.8-33.3-20.1l-18.9-3 11.9-14.9c9.9-12.1 16.4-29.6 16.4-49.01 0-38.54-24-66.99-50.3-66.99h-4.9zm145 3.59v41.85h-41.8v50.16h41.8v41.6h49.9v-41.6h41.9V64.34h-41.9V22.49h-49.9zM52.92 62.89v30.58H22.39v36.63h30.53v30.4h36.4v-30.4h30.58V93.47H89.32V62.89h-36.4zM92.63 199.7v21.8H70.75v26.3h21.88v21.9h26.27v-21.9h21.8v-26.3h-21.8v-21.8H92.63zm355.07 62.4v21.8h-21.9v26.3h21.9v21.9H474v-21.9h21.8v-26.3H474v-21.8h-26.3zm-307.5 99.4v15h-15v18h15v15h18.1v-15h15v-18h-15v-15h-18.1zm230 45.8v15h-15v18h15v15h18v-15h15v-18h-15v-15h-18zM49.32 431.8v15h-15v18h15v15h18.01v-15h15v-18h-15v-15H49.32z" ></path>
SVG;
    }

};}}
