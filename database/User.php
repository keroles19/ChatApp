<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    public $timestamps = true;

    public function rooms()
    {
        return $this->belongsToMany('App\Models\Room');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

    public function providers()
    {
        return $this->hasMany('App\Models\Provider');
    }

}
