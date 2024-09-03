<?php

namespace App\CardStats;

abstract class Female implements \App\CardStat
{
    /**
     * 512x512 original.
     */
    public static function icon():\Illuminate\Contracts\Support\Renderable{
        return new class implements \Illuminate\Contracts\Support\Renderable{
            public function render(){
        return <<<SVG
<path d="M256 25.438c-17.84 0-35.582 3.547-52.063 10.375-16.48 6.827-31.512 16.853-44.125 29.468-12.612 12.617-22.645 27.675-29.468 44.157C123.52 125.92 119.994 143.66 120 161.5c.005 17.832 3.547 35.558 10.375 52.03 6.828 16.474 16.858 31.488 29.47 44.095 12.61 12.607 27.65 22.646 44.124 29.47l.218.092c10.032 4.135 20.52 7.02 31.218 8.657l.125 18.906.314 49.188H165.97v40h70.124l.375 62.875.124 20 40-.25-.125-20-.376-62.625h69.937v-40h-70.186l-.313-49.438-.124-18.47c11.188-1.61 22.154-4.6 32.625-8.936 16.476-6.823 31.515-16.862 44.126-29.47 12.61-12.606 22.64-27.62 29.47-44.093 6.827-16.472 10.37-34.198 10.374-52.03.005-17.84-3.52-35.58-10.344-52.063-6.823-16.482-16.856-31.54-29.47-44.156-12.61-12.614-27.643-22.64-44.123-29.468-16.48-6.827-34.224-10.374-52.063-10.374zm0 40c12.536 0 25.17 2.514 36.75 7.312 11.58 4.798 22.294 11.947 31.156 20.813 8.863 8.865 15.987 19.573 20.78 31.156 4.796 11.58 7.318 24.213 7.314 36.75-.004 12.53-2.515 25.173-7.313 36.75-4.797 11.575-11.95 22.264-20.812 31.124-8.862 8.86-19.58 16.018-31.156 20.812-11.58 4.795-24.19 7.28-36.72 7.28-12.53.002-25.14-2.485-36.72-7.28-11.576-4.794-22.293-11.953-31.155-20.812-8.862-8.86-16.015-19.55-20.813-31.125-4.797-11.577-7.308-24.22-7.312-36.75-.004-12.537 2.518-25.17 7.313-36.75 4.794-11.584 11.918-22.292 20.78-31.157 8.863-8.866 19.576-16.015 31.157-20.813 11.58-4.798 24.214-7.313 36.75-7.313z"></path>
SVG;
    }
};}}
