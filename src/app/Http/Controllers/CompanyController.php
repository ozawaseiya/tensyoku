<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyController extends Controller
{

    public function list()
  {
      // DBよりCompanyテーブルの値を全て取得
     $companies = Company::all();

     // Companyテーブルに存在する企業数を取得
     $companyNumbers = $companies->count();

     // 取得した値をビューに渡す
     return view('list', compact('companies'), compact('companyNumbers'));
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
