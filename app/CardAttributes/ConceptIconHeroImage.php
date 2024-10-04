<?php

namespace App\CardAttributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class ConceptIconHeroImage extends SvgHeroImage
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
    ) {
        parent::__construct(
            code: \view($this->slug . '.icon'),
        );
    }
}
