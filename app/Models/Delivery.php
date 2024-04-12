<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
  protected $table = 'delivery_type';

  // Don't add create and update timestamps in database.
  public $timestamps  = false;

  /**
   * Delivery_type for orders.
   */
  public function orders() {
    return $this->hasMany('App\Models\Order');
  }
}
