<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hsl_iterasi extends Model
{
    protected $table = 'hasil_iterasi';
    protected $fillable = [
        'iterasi', 'total_medoids', 'total_non_medoids', 'selisih'
    ];
}
