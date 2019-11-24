<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Akaunting\Money\Currency;
use Akaunting\Money\Money;
use Illuminate\Support\Str;

class Property extends Model
{
    protected $table    = 'properties';
    protected $fillable = ['name', 'code', 'property_type_id', 'property_status_id', 'zone_id', 'shape_id', 'rent_price', 'sale_price', 'list_price', 'sold_price', 'created_by', 'updated_by'];

    public function zone()
    {
        return $this->belongsTo('App\Models\Zone',  'zone_id', 'id');
    }
    public function shapes()
    {
        return $this->belongsTo('App\Models\Shape', 'shape_id', 'id');
    }
    public function types()
    {
        return $this->belongsTo('App\Models\PropertyType', 'property_type_id', 'id');
    }
    public function statuses()
    {
        return $this->belongsTo('App\Models\PropertyStatus', 'property_status_id', 'id');
    }
    public function property_price_histories()
    {
        return $this->hasMany('App\Models\PropertyPriceHistory', 'property_id', 'id');
    }
    public function setCodeAttribute($value)
    {
        $this->attributes['code'] = Str::random(6);
    }
}
