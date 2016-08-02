<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'title',
        'description',
        'file',
        'price'
    ];
    
    public function purchased(){
        return $this->belongsToMany('App\User', 'user_purchased_stock')->withPivot('purchase_price');
    }
    
    public function uploaded(){
        return $this->belongsToMany('App\User', 'user_has_stock');
    }
    
    public function images(){
        return $this->hasMany('App\StockImages');
    }
    
    public function colors(){
        return $this->belongsToMany('App\Color', 'stock_colors');
    }
    
    public function tags(){
        return $this->belongsToMany('App\Tag', 'stock_tags');
    }
    
    public function categories(){
        return $this->belongsToMany('App\Category', 'stock_categories');
    }
    
    public function subcategories(){
        return $this->belongsToMany('App\Subcategory', 'stock_subcategories');
    }
}
