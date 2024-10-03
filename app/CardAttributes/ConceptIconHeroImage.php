<?php

namespace App\CardAttributes;

use Illuminate\Contracts\Support\Renderable;

#[\Attribute(\Attribute::TARGET_CLASS)]
class ConceptIconHeroImage implements Renderable
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
        public string $slug,
    ) {}

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function render()
    {
        return \App\Strings\html(
            'g',
            ['class' => 'svg-hero'],
            \view($this->slug . '.icon'),
        );
    }
}
