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


//管理者用求人閲覧ページ
Route::get('/admin/read', 'AdminController@read')->name('admin.read');


//管理者用求人管理ページ
Route::resource('/admin', 'AdminController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);


//管理者用トップページ
Route::get('/admin', 'AdminController@admin')->name('admin');


//企業一覧ページ（最初のページ）
Route::get('/', 'CompanyController@list')->name('list');

//転職サイト紹介ページ
Route::get('/info', 'CompanyController@info')->name('info');

//ユーザー情報紹介画面
Route::get('/profile', 'HomeController@profile')->name('profile');

//企業一覧ページ（詳細ページ）
Route::get('/{company_apply_id}', 'CompanyController@detail')->name('detail');


//企業からのメッセージ送信機能
Route::get('/admin/folders/{id}/messages', 'MessageController@index')->name('messages.index');
 

