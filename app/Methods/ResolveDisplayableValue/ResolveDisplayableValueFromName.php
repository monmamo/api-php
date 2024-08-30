<?php

namespace App\Methods\ResolveDisplayableValue;

use App\Strings\Title;

trait ResolveDisplayableValueFromName
{
    /**
     * Resolves the displayable value that the class is deferring.
     *
     * @implements \Illuminate\Contracts\Support\DeferringDisplayableValue::resolveDisplayableValue
     * @group resolving
     * @group nonary
     *
     * @uses \App\Strings\Title::resolveUnitEnum
     *
     * @return \Illuminate\Contracts\Support\Htmlable|string
     */
    public function resolveDisplayableValue()
    {
        return Title::resolveUnitEnum($this);
    }
}
