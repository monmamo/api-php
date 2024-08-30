<?php

namespace App\Methods\MagicGet;

use App\Options\ThrowingOption;

/**
 * 💢 Can't roll this into \App\Concerns\Optional\NoProperties because enums can't include __get.
 */
trait MagicGetNotValid
{
    /**
     * Dynamically accesses a property on the underlying object or value. Reads data from inaccessible (protected or private) or non-existing properties.
     *
     * @group accessor
     * @group accessor-by-key
     * @group magic
     * @group selective
     * @group unary
     *
     * @param string $key Name of the property being accessed.
     *
     * @uses \App\Options\ThrowingOption::__construct
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \ValueError::__construct
     */
    final public function __get(string $key)
    {
        return new ThrowingOption(
            throwable: new \ValueError(\__('option-no-properties')),
            context_to_dump: \compact('this', 'key'),
        );
    }
}
