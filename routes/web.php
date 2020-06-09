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

Route::get('/', function () {
    return view('welcome');  
});

Route::resource('mhs','MahasiswaController');
// Route::get('boostrap','MainController@grid');
// Route::get('profile', function () {
// Only authenticated users may enter...
// })->middleware('auth');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('/admin')->group(function(){
//Login
RoutesRoute::get('/login','Auth\LoginController@showAdminLogi nForm')->name('admin.login');
Route::post('/login','Auth\LoginController@adminLogin')->name('admin.login.submit'); Route::post('/logout','Auth\LoginController@logout')->name('admin.logout');

//Register Routes
Route::get('/register','Auth\RegisterController@showAdminRegisterForm')->name('admin.register'); Route::post('/register','Auth\RegisterController@createAdmin')->name('admin.register.submit');
 



});
 
// Dashboard Routes
Route::get('/dashboard','Admin\HomeController@index')->name('admin.home');