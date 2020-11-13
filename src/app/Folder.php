<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $primaryKey = 'folder_id';

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
