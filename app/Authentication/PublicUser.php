<?php

namespace App\Authentication;

use Illuminate\Contracts\Auth\Authenticatable;

class PublicUser implements Authenticatable
{
    /**
     * Returns the unique identifier for the user.
     *
     * @group accessor
     * @group nonary
     */
    public function getAuthIdentifier()
    {
        return 0;
    }

    /**
     * Returns the name of the unique identifier for the user.
     *
     * @group accessor
     * @group nonary
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'Public User';
    }

    /**
     * Returns the password for the user.
     *
     * @group accessor
     * @group nonary
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return '';
    }

    /**
     * Returns the token value for the "remember me" session.
     *
     * @group accessor
     * @group nonary
     *
     * @return string
     */
    public function getRememberToken()
    {
        return '';
    }

    /**
     * Returns the column name for the "remember me" token.
     *
     * @group accessor
     * @group nonary
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }

    /**
     * Sets the token value for the "remember me" session.
     *
     * @group unary
     *
     * @param string $value
     */
    public function setRememberToken(mixed $value): void {}
}
