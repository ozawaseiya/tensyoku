<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function admins()
    {
        return $this->belongsTo('App\Models\Admin');
    }

    public function folders()
    {
        return $this->hasMany('App\Folder');
    }

    protected $fillable = [
        'company_id',
        'company_name',
        'company_service',
        'company_apply_job',
        'company_job_content',
        'company_job_skill',
        'company_job_year',
        'company_member_number',
        'company_job_salary'
      ];

}
