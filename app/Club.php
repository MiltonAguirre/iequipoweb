<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Club extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cost', 'name'
    ];
    public function user(){
        return $this->belongsto(User::class);
    }
    public function dataClub(){
        return $this->belongsto(DataClub::class);
    }
    public function fields(){
        return $this->hasMany(Field::class);
    }
}
