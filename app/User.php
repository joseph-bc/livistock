<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'username', 'email', 'password', 'group_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function group(){
        return $this->belongsTo('App\UserGroup');
    }
    
    public function purchased(){
        return $this->belongsToMany('App\Stock', 'user_purchased_stock')->withPivot('purchase_price');
    }
    
    public function uploaded(){
        return $this->belongsToMany('App\Stock', 'user_has_stock');
    }
}
