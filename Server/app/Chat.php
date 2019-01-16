<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type','content',
    ];
    function person(){
        return $this->belongsTo('App\Person');
    }

}
