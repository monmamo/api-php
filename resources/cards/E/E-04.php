<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Glass')]
#[Concept('Material')]
#[ImageCredit('Icon by Caro Asercion on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <g class="svg-hero" ><path d="M164 32.14c-7 0-13.7 2.8-18.8 7.74-5 4.95-7.8 11.72-7.8 18.82l.1 30.28v11.72c-5.5 1.6-9.8 6.7-9.8 12.8 0 7.5 6.2 13.5 13.6 13.5h16.5v8.6l-24.3 16.7c-17.3 12-27.5 31.4-27.5 52.2v211c0 35.5 29 64.4 64.5 64.4h171.1c35.5 0 64.4-28.9 64.4-64.4v-211c0-20.8-10.2-40.2-27.5-52.2l-24.2-16.7V127h16.5c7.3 0 13.3-6 13.3-13.5 0-6.1-4.1-11.2-9.6-12.8v-42c0-7.1-2.8-13.87-7.8-18.82-5.1-4.94-11.8-7.74-18.8-7.74H164zm0 17.85h184c2.2 0 4.5.97 6.1 2.58 1.3 1.3 2.1 2.9 2.3 4.73L244.3 69.45c-5 .54-8.5 4.95-8 9.9.5 4.98 5 8.5 9.8 7.98l110.4-12.07v24.84H155.4v-2.94l44-4.76c5-.62 8.5-4.97 8-9.94-.5-4.94-5-8.49-9.8-7.96l-42.2 4.63V58.7c0-2.37 1-4.51 2.5-6.13 1.6-1.61 4-2.58 6.1-2.58zM180.1 127h151.7v20.4l34.1 23.4c11 7.6 17.7 20.3 17.7 33.7v211c0 23.6-18.9 41.9-42 41.9H170.5c-23.2 0-42-18.3-42-41.9v-211c0-13.4 6.6-26.1 17.6-33.7l34-23.4V127zM289 147.1v23.8l49.6 34.3c1.2.9 2 2.2 2 3.8v202.1c0 9.7-3 18.3-8.5 25.9 12.9-1.2 27-13 27-25.9V208.9c0-8.3-4-16.2-10.8-20.9l-40.7-28.1v-12.8H289z" fill="#fff" fill-opacity="1" /></g>
HTML;
    }
};
