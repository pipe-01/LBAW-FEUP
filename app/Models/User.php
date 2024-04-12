<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    // Don't add create and update timestamps in database.
    public $timestamps  = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone_number','nif', 'address', 'city', 'country',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The orders this user own.
     */
    public function orders() {
        return $this->hasMany('App\Models\Order');
    }

    /**
     * The wishes this user have.
     */
    public function wishes() {
        return $this->hasOne('App\Models\Wish');
    }    

    /**
     * The products this user reviewed.
     */
    public function products_reviewed() {
        return $this->hasMany('App\Models\Product','review','user_id','product_id').withPivot('title,content,score');   
    }

}
