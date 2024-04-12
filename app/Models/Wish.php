<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
  protected $table = 'wish';

  // Don't add create and update timestamps in database.
  public $timestamps  = false;

  /**
   * Products that are in wish list.
   */
  public function products() {
    return $this->belongsToMany('App\Models\Product');
  }

  /**
   * Wish list that user have.
   */
  public function user() {
    return $this->belongsTo('App\Models\User');
  }
}
