<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider_vendor extends Model
{
    public function provider()
    {
    	return $this->belongsTo('App\Provider', 'id');
    }
}
