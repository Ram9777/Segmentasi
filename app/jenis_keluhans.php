<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_keluhans extends Model
{
    public function complaints()
    {
    	return $this->belongsTo('App\Complaints');
    }
}
