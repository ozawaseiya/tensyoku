<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyController extends Controller
{

    public function list()
  {
      // DBよりBookテーブルの値を全て取得
     $companies = Company::all();

     // 取得した値をビュー「book/index」に渡す
     return view('list', compact('companies'));
  }
     
}
