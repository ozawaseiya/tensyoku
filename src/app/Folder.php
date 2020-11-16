<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    protected $fillable = [
        'folder_id',
        'company_apply_id',
        'sender_name',
        'user_id'
      ];
}
