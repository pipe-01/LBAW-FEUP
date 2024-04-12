<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Purchase extends Model
{
  protected $table = 'purchase';

  // Don't add create and update timestamps in database.
  public $timestamps  = false;

  /**
   * Purchases that have an order.
   */
  public function order() {
    return $this->belongsTo('App\Models\Order');
  }

  /**
   * Purchases that have the product.
   */
  public function product() {
    return $this->belongsTo('App\Models\Product');
  }
}
