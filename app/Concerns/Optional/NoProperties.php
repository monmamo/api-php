<?php

namespace App\Concerns\Optional;

use App\Options\ThrowingOption;

/**
 * 💢 Can't include __get here because enums can't include __get. Use \App\Methods\MagicGet\MagicGetNotValid.
 */
trait NoProperties
{
    /**
     * Returns an option for a specific property value represented or produced by the option.
     *
     * @implements \App\Contracts\HasProperties::property
     * @group unary
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \ValueError::__construct
     * @uses \App\Options\ThrowingOption::__construct
     */
    final public function property(mixed $property): mixed
    {
        return new ThrowingOption(
            throwable: new \ValueError(\__('option-no-properties')),
            context_to_dump: \compact('this', 'property'),
        );
    }
}
