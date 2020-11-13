<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $primaryKey = 'message_id';

    public function folders()
    {
        return $this->belongsTo('App\Folder', 'company_id');
    }
}
