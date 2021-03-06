<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model 
{

    protected $table = 'messages';
    public $timestamps = true;

    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}