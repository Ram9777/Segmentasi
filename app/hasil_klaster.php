<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasil_klaster extends Model
{
    protected $table = 'hasil_klaster';

    // protected $fillable = [
    //     'fk_trf', 'c'
    // ];

    //  public function hsl_trf()
    //  {
    //  	return $this->hasOne('App\hsl_transformasi');
    //  }
     public function hsl_trf(){
        return $this->hasOne(hsl_transformasi::class, 'id','id');
     }
}
