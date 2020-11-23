<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use App\Message;
use App\Company;
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

    $id = $folder->id;

    $messages = Message::where('folder_id', $id)->get();

    return view('admin.messages.data', ['messages' => $messages, 'user' => $user]);
    }


    public function datadestroy($folder_id) {

        $folder = Folder::where('id', $folder_id)->first();
    
        $folder->delete(); 
    
        return redirect()->route("admin");
    }


    

    //メッセージ返信機能(フォルダー内にメッセージ追加)

    public function reply($id) {

        $folder = Folder::where('id', $id)->first();
    
        return view('admin.messages.reply', ['folder' => $folder]);
    }
 
    public function replystore(Request $request, $folder_id)
    {

    Folder::where('id', $folder_id)->update(['company_name' => Auth::guard('admin')->user()->company_name]);

    $messages = $request->validate([
        'folder_id' => 'required|max:30',
        'name' => 'required|max:30',
        'interview_message' => 'required|max:30'
    ]);
 
    Message::create($messages);
 
     return redirect()->route('admin.read');
    }




    //ユーザー側からの求人応募

    public function create($id)
    {  

    $folder = Folder::all()->count('id');

    return view('create', ['id' => $id, 'folder' => $folder]);
    }
 

    public function store(Request $request)
    {

    $folders = $request->validate([
            'company_apply_id' => 'required|max:30',
            'sender_name' => 'required|max:30',
            'user_id' => 'required|max:30'
    ]);
    
    Folder::create($folders);
 
     $messages = $request->validate([
         'folder_id' => 'required|max:30',
         'interview_message' => 'required|max:30',
         'name' => 'required|max:30'
    ]);
 
    Message::create($messages);
 
     return redirect()->route('list');
    }


    
    //ユーザー側から企業への返信

    public function recreate($id)
    {  

    $id = Folder::find($id);

    return view('recreate', ['id' => $id]);
    }
 
    public function restore(Request $request, $id)
    {
     $messages = $request->validate([
         'folder_id' => 'required|max:30',
         'name' => 'required|max:30',
         'interview_message' => 'required|max:30'
    ]);
 
     Message::create($messages);
 
     return redirect()->route('list');
    }
 

 
    //ユーザー側からの求人確認

    public function folder()
    {

    $id = Auth::user()->id;

    $folders = Folder::where('user_id', $id)->get();

    return view('apply.folder', ['folders' => $folders]);
    }
    
    public function apply($folder_id)
    {
    
    $folder = Folder::where('id', $folder_id)->first();

    $messages = Message::where('folder_id', $folder_id)->get();

    return view('apply.message', ['messages' => $messages, 'folder' => $folder]);
    }
}
