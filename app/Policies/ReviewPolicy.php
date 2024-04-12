<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewPolicy
{
    use HandlesAuthorization;

    public function add(User $user)
    {
      return Auth::check();
    }

    public function update(User $user)
    {
      return Auth::check();
    }
}
