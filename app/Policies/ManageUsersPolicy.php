<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;


use Auth;

class ManageUsersPolicy
{
    use HandlesAuthorization;

    public function search(User $user)
    {
      return Auth::check() && $user->is_admin;
    }

    public function get(User $user)
    {
      return Auth::check() && $user->is_admin;
    }

    public function edit(User $user)
    {
      return Auth::check() && $user->is_admin;
    }

    public function delete(User $user)
    {
      return Auth::check() && $user->is_admin;
    }

    public function addAdmin(User $user)
    {
      return Auth::check() && $user->is_admin;
    }

    public function addUser(User $user)
    {
      return Auth::check() && $user->is_admin;
    }

    public function update(User $user)
    {
      return Auth::check() && $user->is_admin;
    }
}