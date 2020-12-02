<?php

namespace App\Models;

use illuminate\database\eloquent\model;

class Status extends model
{
    //


    protected $fillable = ['content'];

    public function user()
    {
        return $this->belongsto(user::class);
    }


}




