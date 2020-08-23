<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    public $timestamps = true;
    protected $fillable = array('name','user_id','provider_id');



    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

