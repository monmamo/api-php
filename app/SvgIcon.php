<?php

namespace App;

use Illuminate\Contracts\Support\Renderable;

class SvgIcon implements Renderable
{
    public function __construct(
        public readonly float $x,
        public readonly float $y,
        public readonly float $width,
        public readonly float $height,
        public readonly string $viewBox,
        public readonly string $svg,
    ) {}

    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function render()
    {
        $format = <<<'HTML'
        <svg x="%d" y="%d" width="%d" height="%d" xmlns="http://www.w3.org/2000/svg" viewBox="%s">%s</svg>
        HTML;

        return \sprintf($format, $this->x, $this->y, $this->width, $this->height, $this->viewBox, $this->svg);
    }
}
