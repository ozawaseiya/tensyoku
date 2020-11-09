<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'company_apply_id';


    protected $fillable = [
        'company_job_skill',
    ];
}
