<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function vendor()
    {
    	return $this->hasMany('App\Provider_vendor', 'id_provider');

    }
}
