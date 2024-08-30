<?php

namespace App\Contracts;

use DateTimeInterface;

interface Normalizable
{
    /**
     * Returns the "normal" value of the object, as defined by \App\Casts\NormalScalar.
     *
     * @implements \App\Contracts\Normalizable::normalized
     * @group nonary
     */
    public function normalized(): string|int|float|bool|null|DateTimeInterface;
}
