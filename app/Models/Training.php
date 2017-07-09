<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['professor_id','nombre','descripcion','annio'];

    public function professor(){
        return $this->belongsTo('App\Models\Professor');
    }
}
