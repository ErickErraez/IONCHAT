<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePublication extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
    ];

    function TypePublica(){
        return $this->belongsTo('App\Publication');
    }

}
