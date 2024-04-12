<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';

    // Don't add create and update timestamps in database.
    public $timestamps  = false;

    /**
     * The products the stock have.
     */
    public function products_available() {
        return $this->hasMany('App\Models\Product','available_quantity','stock_id','product_id').withPivot('quantity');
    }
}
