<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    rotected $fillable = [
        'category'
    ];
    
    public function subcategories(){
        return $this->hasMany('App\Subcategory');
    }
    
    public function stock(){
        return $this->belongsToMany('App\Stock', 'stock_categories');
    }
}
