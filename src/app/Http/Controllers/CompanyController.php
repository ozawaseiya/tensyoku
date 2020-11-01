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

  public function detail()
  {
      // DBよりBookテーブルの値を全て取得
     $companies = Company::all();

     // 取得した値をビュー「book/index」に渡す
     return view('detail', compact('companies'));
  }

  public function info()
  {
     return view('info');
  }

     
}
