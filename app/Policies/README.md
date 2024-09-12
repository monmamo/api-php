```php
namespace App\Policies;

use App\Models\CONCEPT;
use App\Models\User;

class CONCEPTPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false; // TODO user must have ability to create anthropes.
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CONCEPT $anthrope): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CONCEPT $anthrope): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CONCEPT $anthrope): bool
    {
        return false; // do not allow for now
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CONCEPT $anthrope): bool
    {
        return false; // TODO user must own anthrope or have admin privileges.
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CONCEPT $anthrope): bool
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
```