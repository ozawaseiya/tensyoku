<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;


class RegisterController extends Controller
{
    
    use RegistersUsers;

    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'company_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Admin
     */
    protected function create(array $data)
    {
        return Admin::create([
            'company_name' => $data['company_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
