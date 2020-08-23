<?php

use Illuminate\Support\Facades\Route;

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
//Auth::routes();
//
Route::get('/',function (){
    return view('auth.login');
});


Auth::routes();

Route::get('/redirect/{provider}', 'Auth\SocialController@redirectToProvider')->name('social');
Route::get('/callback/{provider}', 'Auth\SocialController@handleProviderCallback');

Route::get('/newPassword/{id}','Auth\SocialController@newPassword');
Route::post('/createPassword','Auth\SocialController@createPassword');

Route::group(['middleware'=>'auth'],function (){
    Route::get('chat','chatController@index');
    Route::post('send','chatController@send');
});

