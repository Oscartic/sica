<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Block extends Model
{
    use SoftDeletes;

    protected $fillable = ['inicio', 'fin', 'jornada'];

    public function professors(){
        return $this->BelongsToMany('\App\Models\Professor');
    }

    public function subjects(){
        return $this->BelongsToMany('\App\Models\Subject');
    }

    public function days(){
        return $this->BelongsToMany('\App\Models\Day');
    }
}
