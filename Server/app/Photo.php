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
        'photo','date','description',
    ];
    function PhotoPerson(){
        return $this->belongsTo('App\Person');
    }

    function AlbumPhoto(){
        return $this->belongsTo('App\Photo');
    }

}
