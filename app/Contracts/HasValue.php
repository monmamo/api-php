<?php

namespace App\Contracts;

interface HasValue
{
    /**
     * Returns the value if available, or throws an exception otherwise.
     *
     * @implements \App\Contracts\HasValue::get
     * @group nonary
     *
     * @return T
     * @throws \Throwable If value is not available.
     */
    public function get();
}
