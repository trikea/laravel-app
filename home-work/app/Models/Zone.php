<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table    = 'zones';
    protected $fillable = ['name', 'created_by', 'updated_by'];
    public function property()
    {
        return $this->belongsTo('App\Models\Property', 'zone_id', 'id');
    }
}
