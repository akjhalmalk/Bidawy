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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('register', 
// 	[
// 	'uses' => 'SessionsController@create',
// 	'as'   => 'register.create'
// 	]);
// Route::get('login', 
// 	[
//       'uses' => 'SessionsController@getLogin',
//       'as'   => 'login.login'
// 	]);
// Route::get('login', 
// 	[
//       'uses' => 'SessionsController@postLogin',
//       'as'   => 'login.login'
// 	]);
// Route::post('register', [
// 	'uses' => 'SessionsController@store',
// 	'as'   => 'register.create'
// 	]);

// Route::get('/profile/{data}', [
// 	'uses' => 'SessionsController@store',
// 	'as'   => 'register.create'
// 	]);

// Route::get('logout', 'SessionsController@destroy');

Route::get('test',function(){
  return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

//Route::get('/login', 'Auth\LoginController@index');

Route::get('/users/confirmation/{token}','Auth\RegisterController@confirmation')->name('confirmation');
Route::get('verify/{email}/{token}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
// Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
