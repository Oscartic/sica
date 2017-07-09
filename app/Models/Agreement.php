<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = ['professor_id', 'nombre','descripcion'];

    function professor(){
        return $this->belongsTo('App\Models\Professor');
    }
}
