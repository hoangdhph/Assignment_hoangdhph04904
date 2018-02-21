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

Route::get('/', ['as' => 'trangchu' , 'uses' => 'Fronts\PageController@getTrangchu']);

Route::get('formtest', 'testformController@getform');
Route::post('formtest',['as' => 'formsubmit', 'uses' => 'testformController@save']);
// Auth Login
Route::get('cp-login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::post('cp-login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);
Route::any('logout', function(){
	Auth::logout();
	return redirect()->route('login');
})->name('logout');

Route::get('cua-hang', ['as' => 'cuahang', 'uses' => 'Fronts\CuahangController@getCuahang']);
Route::get('san-pham', ['as' => 'sanpham', 'uses' => 'Fronts\SanphamController@getSanpham']);
Route::get('thanh-toan', ['as' => 'thanhtoan', 'uses' => 'Fronts\ThanhToanController@getThanhtoan']);
Route::get('blog', ['as' => 'blog', 'uses' => 'Fronts\BlogController@getBlog']);
Route::get('gioi-thieu', ['as' => 'gioithieu', 'uses' => 'Fronts\PageController@getGioithieu']);
Route::get(App\Category::CATE_URL.'{cateSlug}', ['as' => 'cate.detail' , 'uses' => 'Fronts\PageController@cate' ]);

Route::get('search', ['as' => 'client.search', 'uses' => 'Fronts\PageController@search']);

// User
Route::get('send-mail', ['as' => 'sendMail', 'uses' => 'Fronts\UserController@sendMail']);
Route::get('recoverypw', ['as' => 'recoverypw', 'uses' => 'Fronts\UserController@recoveryPw']);
Route::post('recoverypw', 'Fronts\UserController@mailRecoveryPw');
Route::get('recovery-pwd/{token}', 'Fronts\UserController@confirmRecovery');
Route::post('reset-pwd', ['as' => 'reset-pwd', 'uses' => 'Fronts\UserController@resetpwd']);
Route::get('register-account', ['as' => 'register', 'uses' => 'Fronts\UserController@register']);
Route::post('save-register', ['as' => 'save-register', 'uses' => 'Fronts\UserController@saveRegister']);
Route::get('active-user/{token}', 'Fronts\UserController@activeUser');
Route::get('resend-mail-active', ['as' => 'resend-mail-active', 'uses' => 'Fronts\UserController@reSendMailActive']);












// 



// Route::get('/{slugUrl}', ['as' => 'postdetail', 'uses' => 'Fronts\PageController@detail']);