<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complaint extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'alamat', 'golongan', 'id_jeniskeluhan', 'keterangan', 'tanggal'
    ];

    protected $hidden = [

    ];

    public function pelanggan(){
        return $this->belongsTo(Pelanggann::class, 'pelanggans_id', 'id_keluhan');
    }

    public function jkeluhan()
    {
    	return $this->hasOne('App\Jenis_Keluhans');
    }

    public function dtransformasi()
    {
    	return $this->hasOne('App\Data_Transformations');
    }
}
