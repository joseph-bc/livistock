<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockImage extends Model
{
    protected $fillable = [
        'stock_id',
        'image',
        'watermark',
        'dimensions'
    ];
    
    public function images(){
        return $this->belongsTo('App\Stock');
    }
}
