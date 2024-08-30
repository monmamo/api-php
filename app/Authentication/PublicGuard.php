<?php

namespace App\Authentication;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Nette\NotImplementedException;

class PublicGuard implements Guard
{
    /**
     * Returns whether the current user is authenticated.
     *
     * @implements \Illuminate\Contracts\Auth\Guard::check
     * @group nonary
     *
     * @return bool
     */
    public function check()
    {
        return true;
    }

    /**
     * Returns whether the current user is a guest.
     *
     * @implements \Illuminate\Contracts\Auth\Guard::guest
     * @group nonary
     *
     * @return bool
     */
    public function guest()
    {
        return false;
    }

    /**
     * Returns whether the guard has a user instance.
     *
     * @implements \Illuminate\Contracts\Auth\Guard::hasUser
     * @group nonary
     *
     * @return bool
     */
    public function hasUser()
    {
        return true;
    }

    /**
     * Returns the ID for the currently authenticated user.
     *
     * @implements \Illuminate\Contracts\Auth\Guard::id
     * @group nonary
     *
     * @return null|int|string
     */
    public function id() {}

    /**
     * Set the current user.
     *
     * @implements \Illuminate\Contracts\Auth\Guard::setUser
     * @group unary
     */
    public function setUser(Authenticatable $user): void
    {
        throw new NotImplementedException();
    }

    /**
     * Returns the currently authenticated user.
     *
     * @implements \Illuminate\Contracts\Auth\Guard::user
     * @group nonary
     *
     * @return null|\Illuminate\Contracts\Auth\Authenticatable
     */
    public function user()
    {
        static $cached;
        return $cached ??= new PublicUser();
    }

    /**
     * Validates a user's credentials.
     *
     * @implements \Illuminate\Contracts\Auth\Guard::user
     * @group nonary
     *
     * @return bool
     */
    public function validate(array $credentials = []) {}
}
