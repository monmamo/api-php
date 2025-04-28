<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Returns the view / contents that represents the component.
     */
    public function render(): \Closure
    {
        return function (array $data) {
            \extract($data); // may set $print

            if (isset($print, $_GET['print'])) {
                return '<html>' . $print . '</html>';
            }

            return \view('layouts.guest');
        };
    }
}
