<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'company_apply_id';


    public function admins()
    {
        return $this->belongsTo('App\Models\Admin', 'company_id');
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
