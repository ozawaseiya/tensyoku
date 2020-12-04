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

    
    //企業側からのメッセージフォルダ確認

    public function index($company_apply_id)
    {

        $allfolders = Folder::where('company_apply_id', $company_apply_id)->get();

        $folder_id = Message::pluck('folder_id');

        $folders = $allfolders->find($folder_id);

        //不要なフォルダは削除

        $noneed = $allfolders->whereNotIn('id', $folder_id)->first();
        if (isset($noneed)) {
            $noneed->delete();
        } 

        return view('admin.messages.index', ['folders' => $folders]);
    }


    //企業側からのメッセージフォルダのメッセージ確認

    public function data($id)
    {

        $folder = Folder::find($id);
 
        $user = $folder->user_id;
    
        $user = User::find($user);

        $id = $folder->id;
        
        $messages = Message::where('folder_id', $id)->get();

        
        return view('admin.messages.data', ['messages' => $messages, 'user' => $user, 'folder' => $folder]);
    }


    //企業側からの採用通知

    public function hire($id)
    {

        $hire = Folder::find($id);

        $hire->fill(['hire' => 0])->save();

        $number = $hire->company_apply_id;

        $folders = Folder::where('company_apply_id', $number)->get();

        return view('admin.messages.index', ['folders' => $folders]);
    }  

    
    //企業側からのメッセージ返信作成

    public function reply($id)
    {

        $folder = Folder::where('id', $id)->first();
    
        return view('admin.messages.reply', ['folder' => $folder]);
    }


    //企業側からのメッセージ返信保存
 
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


    //ユーザー側からの求人応募メッセージ作成

    public function create($id)
    {  
        
        $user_id = Auth::user()->id;

        $sender_name = Auth::user()->name;

        $folder = Folder::create(['company_apply_id' => $id, 'sender_name' => $sender_name, 'user_id' => $user_id]);

        $folder = $folder->id;

        return view('create', ['id' => $id, 'folder' => $folder]);
    }
 

    //ユーザー側からの求人応募メッセージ保存

    public function store(Request $request)
    {
 
        $messages = $request->validate([
         'folder_id' => 'required|max:30',
         'interview_message' => 'required|max:30',
         'name' => 'required|max:30'
        ]);
 
        $message = Message::create($messages);
 
        return redirect()->route('list');
    }


    //ユーザー側から企業への返信メッセージフォルダ作成

    public function recreate($id)
    {  

        $id = Folder::find($id);

        return view('recreate', ['id' => $id]);
    }


    //ユーザー側から企業への返信メッセージ作成
 
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
 

    //ユーザー側からのメッセージ確認フォルダ表示

    public function folder()
    {

        $id = Auth::user()->id;

        $folders = Folder::where('user_id', $id)->get();

        return view('apply.folder', ['folders' => $folders]);
    }


    //ユーザー側でのメッセージ表示
    
    public function apply($folder_id)
    {
    
    $folder = Folder::where('id', $folder_id)->first();

        $id = $folder->company_apply_id;

        $messages = Message::where('folder_id', $folder_id)->get();

        $detail = Company::find($id);

        return view('apply.message', ['messages' => $messages, 'folder' => $folder, 'detail' => $detail]);
    }
}
