<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyController extends Controller
{

  //   public function list()
  // {
  //     // DBよりCompanyテーブルの値を全て取得
  //    $companies = Company::all();
  //    // Companyテーブルに存在する企業数を取得
  //    $companyNumbers = $companies->count();

  //    // 取得した値をビューに渡す
  //    return view('list', compact('companies'), compact('companyNumbers'));
  // }

  public function list(Request $request)
    {
        $keyword = $request->input('keyword');
        $company_job_salary = $request->input('company_job_salary');
        $company_job_skill = $request->input('company_job_skill');
 
        $query = Company::query();

        // DBよりCompanyテーブルの値を全て取得
        $company = Company::all();
        // Companyテーブルに存在する企業数を取得
        $companyNumbers = $company->count();
 
        if (!empty($keyword)) {
            $query->where('company_name', 'LIKE', "%{$keyword}%")
                ->orWhere('company_service', 'LIKE', "%{$keyword}%")
                ->orWhere('company_job_skill', 'LIKE', "%{$keyword}%")
                ->orWhere('company_apply_job', 'LIKE', "%{$keyword}%");
        }
 
        if (!empty($company_job_salary)) {
            $query->where('company_job_salary', '>=', $company_job_salary);
        }

        if (!empty($company_job_skill)) {
          $query->Where('company_job_skill',  '=', $company_job_skill);
        } 
 

        $companies = $query->get();

        return view('list', compact('companies', 'companyNumbers',  'keyword', 'company_job_salary'));
    }



  public function detail($company_apply_id)
  {
    $detail = Company::findOrFail($company_apply_id);
    return view('detail', ['detail' => $detail]);
  }


  public function info()
  {
     return view('info');
  }

     
}
