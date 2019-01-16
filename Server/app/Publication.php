<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'date',
    ];

    public function comentary()
    {
        return $this->hasMany('App\Comentary');
    }
    public function typeComentary()
    {
        return $this->hasMany('App\TypeComentary');
    }
    public function person()
    {
        return $this->belongsTo('App\Person');

    }
}
