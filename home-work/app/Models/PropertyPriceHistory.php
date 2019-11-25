<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyPriceHistory extends Model
{
    protected $table    = 'property_price_histories';
    protected $fillable = ['property_id', 'rent_price', 'sale_price', 'list_price', 'sold_price'];
    public function property()
    {
        return $this->belongsTo('App\Models\Property',  'property_id', 'id');
    }
}
