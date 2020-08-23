<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model 
{

    protected $table = 'rooms';
    public $timestamps = true;
    protected $fillable = array('name');

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

}