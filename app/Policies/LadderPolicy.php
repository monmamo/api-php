<?php

namespace App\Policies;

use App\Models\Ladder;
use App\Models\User;

class LadderPolicy
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
    public function delete(User $user, Ladder $ladder): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Ladder $ladder): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Ladder $ladder): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ladder $ladder): bool
    {
        return false; // TODO
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ladder $ladder): bool
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
