<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ItemPolicy
{
    /**
     * Determine whether the user can edit the model.
     */
    public function edit(User $user, Item $item): bool
    {
        return $item->user->is($user);
    }

}
