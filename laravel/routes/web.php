<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

    // if(Auth::check()){ //this check() function is used to check the if user is login or not
    //     return "user is logged in ";
    // }
        // $username="guriqbal";
        // $password="@diction116";
        // if(Auth::attempt(['name'=>$username,'password'=>$password])){  //this attempt is doing the sql query selewct * from users where name="" and password=""
        //       return redirect()->intended('/login');
        // }


       // Auth::logout(); //this is used to logout the user from it's session


});

Auth::routes();
//we have used three commands to create the login system in laravel.
// section 22
/*
1.)composer require laravel/ui
2.)php artisan ui vue --auth
3.)npm install
4.)npm run dev 
*/
Route::get('/home', 'HomeController@index')->name('home');
