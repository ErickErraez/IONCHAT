<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentary extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'date',
    ];
    public function publication()
    {
        return $this->belongsTo('App\Publication');

    }
    public function person()
    {
        return $this->belongsTo('App\Person');

    }


}
