<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
    ];

    public function person()
    {
        return $this->belongsTo('App\Person');

    }
    public function friend()
    {
        return $this->belongsTo('App\Person');

    }

    public function state()
    {
        return $this->hasMany('App\Person');

    }
}
