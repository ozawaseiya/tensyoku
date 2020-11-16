<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function folders()
    {
        return $this->belongsTo('App\Folder');
    }

    protected $fillable = [
        'folder_id',
        'interview_message' 
      ];
}
