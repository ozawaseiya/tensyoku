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

//管理者用募集停止ページ
Route::get('/admin/{company_apply_id}/stop', 'AdminController@stop')->name('admin.stop');

//管理者用求人管理ページ
Route::resource('/admin', 'AdminController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);

//管理者用トップページ
Route::get('/admin', 'AdminController@admin')->name('admin');


//ユーザー応募ページ作成
Route::get('/{company_apply_id}/create', 'MessageController@create')->name('create');

//ユーザー応募ページ保存
Route::post('/{company_apply_id}/store', 'MessageController@store')->name('store');

//ユーザー返信
Route::get('/{company_apply_id}/recreate', 'MessageController@recreate')->name('recreate');

//ユーザー返信保存
Route::post('/{company_apply_id}/restore', 'MessageController@restore')->name('restore');


//企業一覧ページ
Route::get('/', 'CompanyController@list')->name('list');

//転職サイト紹介ページ
Route::get('/info', 'CompanyController@info')->name('info');

//ユーザー情報紹介画面
Route::get('/profile', 'HomeController@profile')->name('profile');

//ユーザー削除
Route::get('/profile/destroy', 'HomeController@destroy')->name('destroy');

//企業側からのメッセージ確認機能
Route::get('/admin/folders/{id}/messages', 'MessageController@index')->name('messages.index');
Route::get('/admin/folders/{id}/messages/data', 'MessageController@data')->name('messages.data');
Route::get('/admin/folders/{id}/messages/hire', 'MessageController@hire')->name('messages.hire');

//企業から応募メッセージ削除
Route::get('/admin/folders/{id}/messages/data/datadestroy', 'MessageController@datadestroy')->name('messages.datadestroy');

//企業からメッセージ返信機能(フォルダー内にメッセージ追加)
Route::get('/admin/folders/{id}/messages/reply', 'MessageController@reply')->name('admin.messages.reply');
Route::post('/admin/folders/{id}/messages/replystore', 'MessageController@replystore')->name('admin.messages.replystore');

//ユーザーからのメッセージ送受信機能
Route::get('/apply/folder', 'MessageController@folder')->name('apply.folder');
Route::get('/apply/{folder_id}/message', 'MessageController@apply')->name('apply.message');


//企業詳細ページ
Route::get('/{company_apply_id}', 'CompanyController@detail')->name('detail');




