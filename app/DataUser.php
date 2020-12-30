<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
  protected $fillable = [
      'first_name','last_name','phone','city','location','sex','birthday',
  ];

    public function user(){
      return $this->hasOne(User::class);
    }

}
