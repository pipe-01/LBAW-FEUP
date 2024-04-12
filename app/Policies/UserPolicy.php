<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Order;
use Illuminate\Auth\Access\HandlesAuthorization;

use Auth;

class UserPolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
      // Only a card owner can see it
      return Auth::check();
    }

    public function edit(User $user)
    {
      // Any user can list its own cards
      return Auth::check();
    }

    public function submit(User $user)
    {
      // Any user can list its own cards
      return Auth::check();
    }

    public function list(User $user, Order $order)
    {
      // Any user can list its own cards
      return Auth::check() && $user->id == $order->user_id;
    }

    public function search(User $user)
    {
      return Auth::check() && $user->is_admin;
    }

    public function get(User $user)
    {
      return Auth::check() && $user->is_admin;
    }

    public function editUser(User $user)
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
