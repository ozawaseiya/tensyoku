<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ユーザー認証関連
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

    });
});

// 管理者認証関連
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

    });

});


//企業一覧ページ（最初のページ）
Route::get('/', 'CompanyController@list')->name('list');

//転職サイト紹介ページ
Route::get('/info', 'CompanyController@info')->name('info');

//ユーザー情報紹介画面
Route::get('/profile', 'HomeController@profile')->name('profile');

//企業一覧ページ（詳細ページ）
Route::get('/{company_apply_id}', 'CompanyController@detail')->name('detail');






//.ユーザーメッセージ送信ページ
    //Route::post('message/{id}', 'LoginController@messageShow')->name('message');
    //Route::post('message/{id}/send', 'LoginController@messageSendForm')->name('send');
    //Route::post('message/{id}/send', 'LoginController@messageSend');

//.企業メッセージ送信ページ
    //Route::post('admin/message/{company_manage_id}', 'AdminLoginController@message')->name('admin.message');
    //Route::post('admin/message/{company_manage_id}/send', 'AdminLoginController@messageSendForm')->name('admin.send');
    //Route::post('admin/message/{company_manage_id}', 'AdminLoginController@messageSend');
 

