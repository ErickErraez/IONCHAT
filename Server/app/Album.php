<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    function person(){
        return $this->belongsTo('App\Person');
    }
    function photo(){
        return  $this->hasMany('App\Album');
       }

}
