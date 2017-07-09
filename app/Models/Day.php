<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = ['dia'];

    public function professors(){
        return $this->BelongsToMany('\App\Models\Professor');
    }

    public function blocks(){
        return $this->BelongsToMany('\App\Models\Block');
    }

    public function subjects(){
        return $this->BelongsToMany('\App\Models\Subject');
    }
}
