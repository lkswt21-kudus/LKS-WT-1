<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    function product() {
        return $this->belongsTo('\App\Product');
    }
}
