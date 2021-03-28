<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_transformations extends Model
{
    public function complaints()
    {
    	return $this->belongsTo('App\Complaints');
    }
}
