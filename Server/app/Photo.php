<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','type','attached','date','description',
    ];
    function Person(){
        return $this->belongsTo('App\Person');
    }

    function Album(){
        return $this->belongsTo('App\Photo');
    }

}
