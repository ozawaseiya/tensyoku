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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/list', 'CompanyController@list')->name('/');
Route::get('/list/{company_apply_id}', 'CompanyController@list')->name('/{company_apply_id}');


Route::group(['middleware' => 'auth'], function() {
    Route::post('/folders/create', 'FolderController@create');
    Route::get('/folders/{folder}/tasks/delete', 'FolderController@delete')->name('folders.delete');
    Route::get('/profile', 'ProfileController@index')->name('index');
    Route::post('/profile', 'ProfileController@store');
    Route::get('/delete', 'ProfileController@delete')->name('delete');
});

Auth::routes();



