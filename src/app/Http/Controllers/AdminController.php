<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function admin()
    {
       // DBよりCompanyテーブルの値を全て取得
       $admin = Admin::all();

       return view('admin', compact('admin'));
    }

}
