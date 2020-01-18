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
Route::get('/hello/view', 'TopController@view');
//商品詳細ページ
// Route::get('/detail', function () {
//     return view('items/detail');
// });

//TOP > 商品詳細ボタン押した時
Route::get('show/{id}', 'ProductController@show');



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

//商品登録後　登録内容表示
Route::get('detail/{id}', 'ProductController@detail')->name('detail');

//Route::get('admin/delete/{id}', 'ProductController@destroy');//データ削除

Route::get('admin/delete/{id}', 'ProductController@destroy')->name('delete');


/*
Route::delete('admin/delete/{id}', 'ProductController@destroy');
rute deleteだと以下のエラー
The GET method is not supported for this route. Supported methods: DELETE.
*/

Route::post('admin/update/{id}', 'ProductController@update');//データ更新

//Route::get('admin','admin.TopController@index');
Auth::routes();


/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
// Route::resource('/', 'HomeController');

//Route::get('/', function () { return redirect('/home'); });
 
/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/

// Route::resource('admin', 'ProductController');

Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/admin', 'ProductController@index')->name('admin.index');
});
 
/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/',         function () { return redirect('/admin'); });
//     Route::get('login',     'admin\auth\logincontroller@showloginform')->name('admin.login');
//     Route::get('register',  'admin\auth\registercontroller@showloginform')->name('admin.register');
//     Route::post('register', 'admin\auth\registercontroller@register')->name('admin.register');
//     Route::post('login',    'Admin\Auth\LoginController@login');
// });

// /*
// |--------------------------------------------------------------------------
// | 4) Admin ログイン後
// |--------------------------------------------------------------------------
// */
// Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
//     Route::post('logout',   'admin\auth\logincontroller@logout')->name('admin.logout');
//     Route::get('admin',      'admin\Productcontroller@index')->name('admin.index');
// });


