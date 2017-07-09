<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['professor_id','tarea','tipo','descripcion','estado'];

    public function professor(){
        return $this->belongsTo('App\Models\Professor');
    }
}
