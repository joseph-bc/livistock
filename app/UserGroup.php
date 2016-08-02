<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{

    protected $fillable = [
        'group'
    ];
    
    public function users(){
        return $this->hasMany('App\User');
    }
}
