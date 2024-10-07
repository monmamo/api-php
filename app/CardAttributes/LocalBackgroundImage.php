<?php

namespace App\CardAttributes;

use Illuminate\Contracts\Support\Renderable;

#[\Attribute(\Attribute::TARGET_CLASS)]
class LocalBackgroundImage implements Renderable
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(
        public string $filename,
    ) {}

    /**
     * Returns content as a string of HTML.
     *
     * @return string
     */
    public function render()
    {
        return \App\Strings\html(
            'image',
            ['x' => 0, 'y' => 0, 'href' => \App\Card\localHeroUri($this->filename)],
        );
    }
}
