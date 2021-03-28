<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class centroidtemp extends Model
{
    protected $table = 'centroid_temp';

    protected $fillable = [
        'jenis', 'iterasi', 'c'
    ];
}
