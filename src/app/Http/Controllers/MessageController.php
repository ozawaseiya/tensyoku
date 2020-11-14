<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {

    $companyId = Auth::guard('admin')->user()->id;

    $folders = Folder::where('id',$companyId);

    return view('admin.messages.index', ['folders' => $folders]);
    }
}
