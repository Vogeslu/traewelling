<?php

namespace App\Policies;

use App\Enum\StatusVisibility;
use App\Models\Status;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param User|null $user
     * @param Status $status
     * @return bool
     */
    public function view(?User $user, Status $status) {
        if ($status->user->userInvisibleToMe) {
            //TODO: Replace with UserPolicy
            return false;
        }

        if (($user != null && $user->id == $status->user_id) || $status->visibility == StatusVisibility::PUBLIC) {
            return true;
        }

        if ($status->visibility == StatusVisibility::FOLLOWERS) {
            return $user != null && $user->follows->contains('id', $status->user_id);
        }

        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user): bool {
        //Everyone is allowed to create status models.
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Status $status
     * @return bool
     */
    public function update(User $user, Status $status): bool {
        return $status->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Status $status
     * @return bool
     */
    public function delete(User $user, Status $status): bool {
        return $status->user_id == $user->id;
    }
}
