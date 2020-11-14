<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index($company_apply_id)
    {

    $id = Auth::guard('admin')->user()->id;

    $folders = Folder::where('id', $company_apply_id)->get();
    
    
    return view('admin.messages.index', ['folders' => $folders]);
    }
}
