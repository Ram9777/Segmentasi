<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hsl_transformasi extends Model
{
    use SoftDeletes;

    protected $table = 'hsl_transformasi';

    protected $fillable = [
        'kode_wilayah', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'
    ];

    protected $hidden = [

    ];

    //  public function hsl_klaster()
    //  {
    //  	return $this->belongsTo('App\hasil_klaster');
    //  }
     public function hsl_klaster(){
         return $this->belongsTo(hasil_klaster::class, 'id','id');
     }
    // public function getKeluhanRand(){
    //     $random = DB::table('complaints')
    //         ->inRandomOrder()
    //          ->first();
    // }
}
