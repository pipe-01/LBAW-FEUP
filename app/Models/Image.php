<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
  protected $table = 'image';

  // Don't add create and update timestamps in database.
  public $timestamps  = false;

  /**
   * Product's images
   */
  public function product() {
    return $this->belongsTo('App\Models\Product');
  }
}
