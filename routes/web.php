<?php

use App\Mail\TestingMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/clase', 'ClaseController');
Route::resource('/teniente', 'TenienteController');

//Route::get('/correo', function(){
//    Mail::to('desde_web@mail.com')->send(new TestingMail());
//    return new TestingMail();
//});
