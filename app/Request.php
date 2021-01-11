<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    function product() {
        return $this->belongsTo('\App\Product');
    }
}
