<?php

namespace App\Policies;

use App\Models\User;
use App\Enums\UserRole;

use Illuminate\Auth\Access\Response;

class UserPolicy
{
    // public function updateStatus(User $authUser, User $targetUser): bool
    // {
    //     // Ví dụ: chỉ Admin mới được sửa user khác
    //     return $authUser->isAdmin();
    // }
    public function updateStatus(User $User, User $targetUser): bool
    {
        return $User->isAdmin() && $User->id !== $targetUser->id;
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        return false;
    }
}
