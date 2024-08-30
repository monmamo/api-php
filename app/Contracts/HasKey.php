<?php

namespace App\Contracts;

/**
 * An interface of the key functions in.
 */
interface HasKey
{
    /**
     * Returns the value of the entity's primary key.
     *
     * Signature matches that of \Illuminate\Database\Eloquent\Model::getKey, which does not have a return type.
     *
     * @implements \App\Contracts\HasKey::getKey
     * @group nonary
     * @group accessor
     */
    public function getKey();

    /**
     * Returns the primary key for the entity.
     *
     * 💢 Signature matches that of \Illuminate\Database\Eloquent\Model::getKeyName, which does not have a return type.
     *
     * @implements \App\Contracts\HasKey::getKeyName
     * @group nonary
     * @group accessor
     *
     * @return string
     */
    public function getKeyName();

    /**
     * Returns the auto-incrementing key type.
     *
     * 💢 Signature matches that of \Illuminate\Database\Eloquent\Model::getKeyType, which does not have a return type.
     *
     * @implements \App\Contracts\HasKey::getKeyType
     * @group nonary
     * @group accessor
     *
     * @return string
     */
    public function getKeyType();
}
