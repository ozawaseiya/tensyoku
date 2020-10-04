<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\User;



class ProfileController extends Controller
{
    /**
     * プロフィール登録フォームの表示
     *
     * @return Response
     */
    public function index()
    {
        $is_image = false;                 
        if (Storage::disk('local')->exists('public/images'. Auth::id() . '.jpg')) {
            $is_image = true;
           return redirect('profile');
        }
        return view('profile');
    }

    //publicフォルダにid紐付け画像を保存する（アカウント保持者ごとにプロフィール画像）

    public function store(ProfileRequest $request)
    {
        $request->photo->storeAs('public/images', Auth::id() . '.jpg');
        return redirect('profile')->with('success', '新しいプロフィール画像を登録しました');
    }

    //画像の有無をpublicフォルダから判定し、削除する
    public function delete()
    {
        $number = Auth::user()->id;
        if (Storage::disk('public')->exists($number.'.jpg'))
        {
        Storage::delete('public/images/'.$number.'.jpg');
        return redirect('profile')->with('success', '画像を削除しました'); 
        }
        return redirect('profile')->with('success', '削除する画像がありません');
    }

}