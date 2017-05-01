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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('admin', function () {
    return view('template.main');

});

Route::get('home', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');

Route::get('about', 'HomeController@about');

Route::get('/logout', 'HomeController@logout');

Route::get('/imagelist', 'HomeController@imagelist');

Route::get('/conlist', 'HomeController@conlist');
Route::get('/createcon', 'ContainerController@createcon');

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::resource('/listcon', 'ContainerController');