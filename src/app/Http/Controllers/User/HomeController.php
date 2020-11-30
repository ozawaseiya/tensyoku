<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    //ユーザー側のログイン画面表示

    public function index()
    {
        return view('user.home');
    }


}