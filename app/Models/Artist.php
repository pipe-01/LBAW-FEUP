<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  protected $table = 'Artist';

  // Don't add create and update timestamps in database.
  public $timestamps  = false;

  /**
   * Products that artist owns.
   */
  public function products() {
    return $this->hasMany('App\Models\Product');
  }
}
