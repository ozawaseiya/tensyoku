<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message_category extends Model
{
    protected $primaryKey = 'message_category_id';

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
