<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table    = 'properties';
    protected $fillable = ['name', 'code', 'property_type_id', 'property_status_id', 'zone_id', 'shape_id', 'rent_price', 'sale_price', 'list_price', 'sold_price', 'created_by', 'updated_by'];

    public function zone()
    {
        return $this->hasOne('App\Models\Zone', 'id', 'zone_id');
    }
    public function shape()
    {
        return $this->hasOne('App\Models\Shape', 'id', 'shape_id');
    }
    public function type()
    {
        return $this->hasOne('App\Models\PropertyType', 'id', 'property_type_id');
    }
    public function status()
    {
        return $this->hasOne('App\Models\PropertyStatus', 'id', 'property_status_id');
    }
    public function property_price_histories()
    {
        return $this->hasMany('App\Models\PropertyStatus', 'id', 'property_id');
    }
    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0", STR_PAD_LEFT);
    }
}
