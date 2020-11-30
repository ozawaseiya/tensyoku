<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    //ユーザー側からのプロフィール情報表示

    public function profile()
    {
        return view('profile');
    }

    //ユーザー側からのアカウント削除

    public function destroy ()
    {
        $user = Auth::user();
    
        Auth::logout(); // ログアウト
        $user->delete(); // ユーザが削除される。
    
        return redirect("/");
    }
    
}
