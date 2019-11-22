<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHistory extends Model
{
    protected $table = 'product_price_histories';
    protected $fillable = [
        'rent_price', 'list_price', 'sold_price', 'sale_price', 'gallery', 'profile'
    ];
    public function products()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0", STR_PAD_LEFT);
    }
}
