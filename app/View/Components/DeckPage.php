<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class DeckPage extends Component
{
    /**
     * Returns the view / contents that represents the component.
     */
    public function render(): View
    {
        return \view('layouts.deck-page');
    }
}
