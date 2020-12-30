<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'name',
    ];
  
    public function club(){
      return $this->belongsto(Club::class);
    }
    public function games(){
      return $this->hasMany(Game::class);
    }
}
