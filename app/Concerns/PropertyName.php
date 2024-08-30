<?php

namespace App\Concerns;

trait PropertyName
{
    private $property_name;

    /**
     * @group nonary
     * @group accessor
     */
    public function getPropertyName()
    {
        return $this->property_name;
    }

    /**
     * @group mutator
     * @group fluent
     * @group unary
     */
    public function setPropertyName(mixed $property_name): self
    {
        $this->property_name = $property_name;

        return $this;
    }
}
