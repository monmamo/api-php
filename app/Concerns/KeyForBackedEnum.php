<?php

namespace App\Concerns;

/**
 * Implementation of \App\Contracts\HasKey for backed enums that use the value as the key.
 */
trait KeyForBackedEnum
{
    /**
     * Returns the value of the model's primary key.
     *
     * Analog of \Illuminate\Database\Eloquent\Model::getKey.
     *
     * @implements \App\Contracts\HasKey::getKey
     * @group nonary
     * @group accessor
     */
    public function getKey(): string
    {
        return $this->value;
    }

    /**
     * Returns the primary key for the model.
     *
     * Analog of \Illuminate\Database\Eloquent\Model::getKeyName.
     *
     * @implements \App\Contracts\HasKey::getKeyName
     * @group nonary
     * @group accessor
     *
     * @return string
     */
    public function getKeyName()
    {
        return 'value';
    }

    /**
     * Returns the auto-incrementing key type.
     *
     * Analog of \Illuminate\Database\Eloquent\Model::getKeyType.
     *
     * @implements \App\Contracts\HasKey::getKeyType
     * @group nonary
     * @group accessor
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }
}
