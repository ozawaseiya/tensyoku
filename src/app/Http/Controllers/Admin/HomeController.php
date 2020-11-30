<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //企業側の管理者画面ログイン画面

    public function index()
    {
        return view('admin.home');
    }

}