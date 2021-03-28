<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggan extends Model
{
    use SoftDeletes;

    protected $table = 'pelanggan';

    protected $fillable = [
        'nama', 'golongan', 'alamat', 'email', 'id'
    ];

    protected $hidden = [

    ];

    public function complaints(){
        return $this->hasMany(Complaint::class, 'pelanggans_id', 'id');
    }

     public function usr(){
        return $this->belongsTo(User::class, 'id','id');
      }
}