<?php

namespace App\Policies;

use App\Models\Anthrope;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AnthropePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Anthrope $anthrope): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false; // TODO user must have ability to create anthropes.
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Anthrope $anthrope): bool
    {
        return false; // TODO user must own anthrope or have admin privileges.
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Anthrope $anthrope): bool
    {
        return false; // do not allow for now

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Anthrope $anthrope): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Anthrope $anthrope): bool
    {
        return false; // do not allow for now
    }
}
