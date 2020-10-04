<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//フォルダーとタスクとの関係

class Folder extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
