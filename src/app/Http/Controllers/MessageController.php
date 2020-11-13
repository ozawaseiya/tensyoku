<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {

    $companyId = Auth::guard('admin')->user()->company_id;

    $folders = Folder::where('company_id',$companyId);

    return view('admin.messages.index', ['folders' => $folders]);
    }
}
