<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = ['cod','asignatura','nivel','optativa','tipo','horas','requisitos'];

    public function professors(){
        return $this->BelongsToMany('\App\Models\Professor');
    }

    public function blocks(){
        return $this->BelongsToMany('\App\Models\Block');
    }

    public function days(){
        return $this->BelongsToMany('\App\Models\Day');
    }
}
