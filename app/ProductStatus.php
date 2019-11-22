<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0",STR_PAD_LEFT);
    }
}
