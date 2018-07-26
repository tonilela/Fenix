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
    return view('welcome');
});

Auth::routes();
Route::middleware(['middleware'=>'auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile/{slug}','ProfilController@index');
    Route::get('/changePicture',function (){
        return view('profile.picture');
    });
    Route::post('/uploadPicture','ProfilController@uploadPicture');
    Route::get('editProfile', function (){
        return view('profile.editProfile');
    });
});

Route::get('/logout','Auth\LoginController@logout');