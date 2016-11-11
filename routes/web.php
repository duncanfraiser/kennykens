<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','WelcomeController@index');

Route::resource('/welcome','WelcomeController');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/event', 'EventController');

Route::resource('/picture', 'PictureController');

Route::resource('/video', 'VideoController');

Route::resource('/press', 'PressController');

Route::resource('/book', 'BookController');
Route::get('book/{book}/thanks', 'BookController@thanks');

Route::resource('fileuploads', 'FileuploadController');

Route::resource('merchandise', 'MerchandiseController');


