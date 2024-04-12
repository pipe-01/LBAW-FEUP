<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
  protected $table = 'orderlist';

  // Don't add create and update timestamps in database.
  public $timestamps  = false;

  /**
   * Order that has been purchased.
   */
  public function purchases() {
    return $this->hasMany('App\Models\Purchase');
  }

  /**
   * Delivery type associated to an order.
   */
  public function delivery_type() {
    return $this->belongsTo('App\Models\Delivery');
  }

    /**
   * Order that a user have.
   */
  public function user() {
    return $this->belongsTo('App\Models\User');
  }

}