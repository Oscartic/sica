<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre','rut','titulo','email','image','num_telefono'];


    public function agreements(){
        return $this->hasMany('App\Models\Agreement');
    }

    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }

    public function trainings(){
        return $this->hasMany('App\Models\Training');
    }

    /**
     * Modulo MAH
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subjects(){
        return $this->BelongsToMany('\App\Models\Subject');
    }

    public function blocks(){
        return $this->BelongsToMany('\App\Models\Block');
    }

    public function days(){
        return $this->BelongsToMany('\App\Models\Day');
    }
}
