<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'color'
    ];
    
    public function stock(){
        return $this->belongsToMany('App\Stock', 'stock_colors');
    }
}
