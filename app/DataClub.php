<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataClub extends Model
{
  protected $fillable = [
      'phone','address','city','location',
  ];

  public function club(){
    return $this->hasOne(Club::class);
  }

}
