<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
    ];
  
    public function field(){
      return $this->belongsto(Field::class);
    }
}
