<?php

namespace App\Policies;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CampaignPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return auth()->check();
    }

    public function view(User $user, Campaign $campaign): bool
    {
        return auth()->check();
    }

    public function create(User $user): bool
    {
        return auth()->check();
    }

    public function update(User $user, Campaign $campaign): bool
    {
        return auth()->check();
    }

    public function delete(User $user, Campaign $campaign): bool
    {
        return auth()->check();
    }

    public function restore(User $user, Campaign $campaign): bool
    {
        return auth()->check();
    }

    public function forceDelete(User $user, Campaign $campaign): bool
    {
        return auth()->check();
    }
}
