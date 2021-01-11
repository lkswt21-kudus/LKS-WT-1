<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function purchases() {
        return $this->hasMany('\App\Purchases');
    }

    function reqs() {
        return $this->hasMany('\App\Request');
    }
}
