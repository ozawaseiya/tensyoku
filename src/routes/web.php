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


Auth::routes();
//企業一覧ページ（最初のページ）
Route::get('/', 'CompanyController@list')->name('list');

//転職サイト紹介ページ
Route::get('/info', 'CompanyController@info')->name('info');

//会員登録後のログイン完了画面
Route::get('/home', 'HomeController@index')->name('home');

//ユーザー情報紹介画面
Route::get('/profile', 'HomeController@profile')->name('profile');

//企業一覧ページ（詳細ページ）
Route::get('/{company_apply_id}', 'CompanyController@detail')->name('detail');




//ユーザー認証
//Route::group(['middleware' => 'auth'], function() {
//3.ユーザーログイン関連ページ
    //Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
    //Route::post('/register', 'RegisterController@create');
    //Route::post('/delete', 'RegisterController@showDelete');
    //Route::get('/login', 'LoginController@showLoginForm')->name('login');
    //Route::post('/login', 'LoginController@login');
    //Route::post('/logout', 'LoginController@logout')->name('logout');

//4.ユーザーメッセージ送信ページ
    //Route::post('message/{id}', 'LoginController@messageShow')->name('message');
    //Route::post('message/{id}/send', 'LoginController@messageSendForm')->name('send');
    //Route::post('message/{id}/send', 'LoginController@messageSend');

//5.管理画面用ログイン関連ページ
    //Route::get('/admin/register', 'AdminRegisterController@showAdminRegistrationForm')->name('admin.register');
    //Route::post('/admin/register', 'AdminRegisterController@showAdminRegister');
    //Route::post('/admin/delete', 'AdminRegisterController@showAdminDelete');
    //Route::get('/admin/login', 'AdminLoginController@showAdminLoginForm')->name('admin.login');
    //Route::post('/admin/login', 'AdminLoginController@showAdminLogin');
    //Route::post('admin/logout', 'AdminLoginController@showAdminLogout')->name('admin.logout'); 

//6.企業メッセージ送信ページ
    //Route::post('admin/message/{company_manage_id}', 'AdminLoginController@message')->name('admin.message');
    //Route::post('admin/message/{company_manage_id}/send', 'AdminLoginController@messageSendForm')->name('admin.send');
    //Route::post('admin/message/{company_manage_id}', 'AdminLoginController@messageSend');
 
//});
