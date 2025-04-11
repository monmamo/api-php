<?php

namespace App\CardAttributes;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Blade;

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
     * @group nonary
     */
    public function render()
    {
        return Blade::render(
            '<x-card.hero.svg><g fill="#ffffff" fill-opacity="1">{{ \view($slug . \'.icon\') }}</g></x-card.hero.svg>',
            [
                'slug' => $this->slug,
            ],
        );
    }
}
