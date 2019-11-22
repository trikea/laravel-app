<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    protected $table    = 'product_statuses';
    protected $fillable = ['name'];
    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0", STR_PAD_LEFT);
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}
