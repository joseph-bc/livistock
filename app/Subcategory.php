<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    rotected $fillable = [
        'id_category',
        'subcategory'
    ];
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    public function stock(){
        return $this->belongsToMany('App\Stock', 'stock_subcategories');
    }
}
