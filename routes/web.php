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

use App\Role;
use Illuminate\Support\Facades\Auth;

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('demo',function(){
    return view('theme.backoffice.pages.demo');

//Auth::routes(); metodo configurado con rutas para login

Route::get('demo',function(){
    return view('theme.backoffice.pages.demo');
});

Route::get('/home', 'HomeController@index')->name('home');
*/
Auth::routes(['verify'=>true]);

    Route::resource('user', 'UserController');
    Route::group(['middleware' => ['auth'], 'as' =>'backoffice.'], function () {
    Route::resource('role', 'RoleController');
    Route::resource('permission','PermissionController');


});


