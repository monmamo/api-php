<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Svg extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $height,
        public int $width,
        public ?string $id = null,
        public int $dx = 0,
        public int $dy = 0,
        public ?int $x = null,
        public ?int $y = null,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return \view('components.svg.index');
    }
}
