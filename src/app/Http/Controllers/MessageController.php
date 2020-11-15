<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use App\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index($company_apply_id)
    {

    $folders = Folder::where('company_apply_id', $company_apply_id)->get();

    return view('admin.messages.index', ['folders' => $folders]);
    }


    public function data($company_apply_id)
    {

    $folder = Folder::find($company_apply_id);
 
    $user = $folder->user_id;
    
    $user = User::find($user);

    $message = Message::where('folder_id', $company_apply_id)->first();

    return view('admin.messages.data', ['message' => $message, 'user' => $user]);
    }


    //ユーザー側からの求人応募

    public function create()
    {
    return view('create');
    }
 

    public function store(Request $request)
    {
 
     $companies = $request->validate([
         'company_id' => 'required|max:30',
         'name' => 'required|max:30'
     ]);
 
     Company::create($companies);
 
     return redirect()->route('list');
    }
 
    
    public function show($company_apply_id)
    {
 
     $company = Company::findOrFail($company_apply_id);
 
     return view('show', ['company' => $company]);
    }
 


}
