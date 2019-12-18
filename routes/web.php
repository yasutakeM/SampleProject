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

//TOP PAGE
// Route::get('/', function () {
//     return view('top');
// });

Route::resource('/', 'TopController');




//Route::get('top','TopController@index');

//商品詳細ページ
Route::get('/detail', function () {
    return view('items/detail');
});

//会員ログイン
Route::get('/login', function () {
    return view('entry/login');
});

//会員登録
Route::get('/regist', function () {
    return view('entry/regist');
});


//管理者
Route::resource('admin', 'ProductController');
Route::get('admin/delete/{id}', 'ProductController@destroy');//データ削除
/*
Route::delete('admin/delete/{id}', 'ProductController@destroy');

rute deleteだと以下のエラー
The GET method is not supported for this route. Supported methods: DELETE.
*/

Route::post('admin/update/{id}', 'ProductController@update');//データ更新

//Route::get('admin','admin.TopController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


