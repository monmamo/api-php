<?php

namespace App\Enums;

use App\EnumReference;
use App\GeneralAttributes\Environment;

enum Hosts: string
{
    #[Environment(Environments::Testing)]
    case CLI = 'localhost'; // This is what request()->host() resolves to from the CLI.
    #[Environment(Environments::Development)]
case Default="";

    /**
     * Returns the environment of the host.
     *
     * @group accessor
     * @group nonary
     *
     * @uses \App\EnumReference::make
     * @uses \App\EnumReference::getSingularAttribute
     * @uses \ReflectionAttribute::getArguments
     */
    public function environment(): Environments
    {
        return EnumReference::make($this)->getSingularAttribute(Environment::class, true)->getArguments()[0];
    }

    /**
     * @group unary
     */
    public function url(mixed $string): string
    {
        return 'http://' . $this->value . '/' . $string;
    }
}
