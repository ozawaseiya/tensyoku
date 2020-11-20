<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\Folder;

class CompanyController extends Controller
{

  public function list(Request $request)
    {
        $keyword = $request->input('keyword');
        $company_job_salary = $request->input('company_job_salary');
        $company_job_skill = $request->input('company_job_skill');
 
        $query = Company::query();

        // DBよりCompanyテーブルの値を全て取得
        $company = Company::paginate(5);
        // Companyテーブルに存在する企業数を取得
        $companyNumbers = Company::all()->count();


    if (!empty($keyword)) {
      $query->where(function($query) use ($keyword) {
          $query->where('company_name', 'LIKE', "%{$keyword}%")
                ->orWhere('company_service', 'LIKE', "%{$keyword}%")
                ->orWhere('company_job_skill', 'LIKE', "%{$keyword}%")
                ->orWhere('company_apply_job', 'LIKE', "%{$keyword}%");
     });
    }

    if (!empty($company_job_salary)) {
      $query->where('company_job_salary', '>=', $company_job_salary);
    }


    if (!empty($company_job_skill)) {
    $query->WhereIn('company_job_skill', $company_job_skill);
    }

        $companies = $query->paginate(5);


        return view('list', compact('companies', 'companyNumbers',  'keyword', 'company_job_salary', 'company_job_skill'));
    }



  public function detail($company_apply_id)
  {

    $detail = Company::find($company_apply_id);

    if (Auth::guard('user')->check()) {

      $name = Auth::user()->name;

      $folder = Folder::where('sender_name', $name)->where('company_apply_id', $company_apply_id)->first();

      if (empty($folder->sender_name)) {
        $apply = NULL;
      } else {
        $apply = Auth::user()->name;
      } 

    } else {
        $apply = NULL;
    }

    return view('detail', ['detail' => $detail, 'apply' => $apply]);
  }


  public function info()
  {
     return view('info');
  }

}
