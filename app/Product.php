<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = 'products';
    protected $fillable = [
        'name', 'rent_price', 'list_price', 'sold_price', 'sale_price', 'gallery', 'profile'
    ];
    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0", STR_PAD_LEFT);
    }
    public function product_price_histories()
    {
        return $this->hasMany('App\ProductHistory', 'product_id');
    }
}
