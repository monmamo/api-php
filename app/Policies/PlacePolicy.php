<?php

namespace App\Policies;

use App\Models\Place;
use App\Models\User;

class PlacePolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false; // TODO
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Place $place): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Place $place): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Place $place): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Place $place): bool
    {
        return false; // TODO
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Place $place): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }
}
