<?php

namespace App\Policies;

use App\Models\Monster;
use App\Models\User;

class MonsterPolicy
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
    public function delete(User $user, Monster $monster): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Monster $monster): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Monster $monster): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Monster $monster): bool
    {
        return false; // TODO
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Monster $monster): bool
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
