<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Folder;
use App\Http\Requests\CreateFolder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;


class FolderController extends Controller
{

    //フォルダー作成フォームと作成できるフォルダー数の制限設定
    public function showCreateForm()
    {
        $count = Auth::user()->folders()->pluck('id')->count();
        
        if ( 5 > $count ) {  
            return view('folders/create');   
        }
        {
            return redirect('profile')->with('success', '作成できるフォルダー数は最大５個までです');
        }
    }
    
    //フォルダー削除の順序
    public function create(CreateFolder $request)
    {

        // フォルダモデルのインスタンスを作成する
        $folder = new Folder();
        // タイトルに入力値を代入する
        $folder->title = $request->title;
        // インスタンスの状態をデータベースに書き込む
        Auth::user()->folders()->save($folder);
        return redirect()->route('tasks.index', [
            'folder' => $folder->id,
        ]);
    }
    //指定されたフォルダーを削除する
    public function delete(Folder $folder)
    {
        $folder->delete();
        return view('folders.delete'); 
    }

}
