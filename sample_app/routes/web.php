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

Route::get('/', function () {
    return view('login');
});

Route::get('/other', function () {
    return 'ここは/otherです。';
});

Route::get('/practice', 'SampleController@practice');

Route::get('/view_sample',function() {
    return view('sample');
});

Route::get('/profile',function() {
    return view('profile');
});

Route::get('/blade_sample', function () {
    $title = 'bladeテンプレートのサンプルです';
    $description = 'bladeテンプレートを利用すると、<br>HTML内にPHPの変数を埋め込むことができます。';
    return view('blade_sample',[
        'title' => $title,
        'description' => $description,
    ]);
});

Route::get('/sample_action', 'SampleController@sample_action');

Route::get('/message_sample', 'SampleController@message_sample');

Route::get('/message_practice', 'SampleController@message_practice');

Route::get('/blade_example', 'SampleController@blade_example');

Route::get('/messages', 'MessagesController@index');

Route::post('/messages', 'MessagesController@create');

Auth::routes();


Route::prefix('admin')->name('admin::')->group(function() {
    //ホーム画面
    Route::get('home', 'Admin\HomeController@index')->name('home');
    // ログインフォーム
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
    // ログイン処理
    Route::post('login', 'Admin\Auth\LoginController@login');
    //ログアウト処理
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');
//register
    Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('register');
    //Route::post('register', 'Admin\Auth\RegisterController@register')->name('register');

});


// admin認証が必要なページ
Route::middleware('auth:admin')->group(function () {
    //Route::get('admin', 'AdminController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
