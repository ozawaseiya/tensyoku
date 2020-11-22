<?php

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

//管理者削除
Route::get('/admin/admindestroy', 'AdminController@admindestroy')->name('admin.admindestroy');

//管理者用求人閲覧ページ
Route::get('/admin/read', 'AdminController@read')->name('admin.read');

//管理者用求人管理ページ
Route::resource('/admin', 'AdminController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);

//管理者用トップページ
Route::get('/admin', 'AdminController@admin')->name('admin');


//ユーザー応募ページ作成
Route::get('/{company_apply_id}/create', 'MessageController@create')->name('create');

//ユーザー応募ページ保存
Route::post('/{company_apply_id}/store', 'MessageController@store')->name('store');


//企業一覧ページ
Route::get('/', 'CompanyController@list')->name('list');

//転職サイト紹介ページ
Route::get('/info', 'CompanyController@info')->name('info');

//ユーザー情報紹介画面
Route::get('/profile', 'HomeController@profile')->name('profile');

//ユーザー削除
Route::get('/profile/destroy', 'HomeController@destroy')->name('destroy');

//ユーザーからのメッセージ確認機能
Route::get('/admin/folders/{id}/messages', 'MessageController@index')->name('messages.index');
Route::get('/admin/folders/{id}/messages/data', 'MessageController@data')->name('messages.data');

//企業から応募メッセージ削除
Route::get('/admin/folders/{id}/messages/data/datadestroy', 'MessageController@datadestroy')->name('messages.datadestroy');

//企業からメッセージ返信機能(フォルダー内にメッセージ追加)
Route::get('/admin/folders/{id}/messages/reply', 'MessageController@reply')->name('admin.messages.reply');
Route::post('/admin/folders/{id}/messages/replystore', 'MessageController@replystore')->name('admin.messages.replystore');

//ユーザーからのメッセージ送信機能
Route::get('/apply/folder', 'MessageController@folder')->name('apply.folder');
Route::get('/apply/{$folder_id}/message', 'MessageController@message')->name('apply.message');

//企業詳細ページ
Route::get('/{company_apply_id}', 'CompanyController@detail')->name('detail');




