<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    rotected $fillable = [
        'tag'
    ];
    
    public function stock(){
        return $this->belongsToMany('App\Stock', 'stock_tags');
    }
}
