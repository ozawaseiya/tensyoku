<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
