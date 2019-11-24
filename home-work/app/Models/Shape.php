<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    protected $table    = 'shapes';
    protected $fillable = ['name', 'created_by', 'updated_by'];
    public function property()
    {
        return $this->belongsTo('App\Models\Property', 'shape_id', 'id');
    }
    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0", STR_PAD_LEFT);
    }
}
