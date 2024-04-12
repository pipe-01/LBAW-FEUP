<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'product';

  // Don't add create and update timestamps in database.
  public $timestamps  = false;

  /**
   * Product's images.
   */
  public function images() {
    return $this->hasMany('App\Models\Image');
  }

  /**
   * Purchases that have the product.
   */
  public function purchases() {
    return $this->hasMany('App\Models\Purchase');
  }

  /**
   * Artist of the product.
   */
  public function artist() {
    return $this->belongsTo('App\Models\Artist');
  }

  /**
   * Product's stock.
   */
  public function stock() {
    return $this->belongsTo('App\Models\Stock','available_quantity','product_id', 'stock_id').withPivot('quantity');
  }


  /**
   * Product review author.
   */
  public function author() {
    return $this->belongsTo('App\Models\User','review','product_id','user_id').withPivot('title,content,score');
  }
}
