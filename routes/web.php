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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','AdminController@login')->name('login');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home'); // default , ami nicher line change koresi
Route::get('/dashboard', 'AdminController@index')->name('dashboard');

Route::prefix('user')->group(function(){
    Route::get('/index', 'Backend\UserController@index')->name('user.index');
    Route::get('/show/{id}', 'Backend\UserController@show')->name('user.show');
    Route::get('/create', 'Backend\UserController@create')->name('user.create');
    Route::post('/store', 'Backend\UserController@store')->name('user.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('user.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('user.update');
    Route::get('/destroy/{id}', 'Backend\UserController@destroy')->name('user.destroy');
    Route::get('/password', 'Backend\UserController@password')->name('user.password');
    Route::post('/password/update', 'Backend\UserController@passwordUpdate')->name('user.password.update');
    // Route::get('/profile', 'Backend\UserController@profile')->name('user.profile');
});

Route::prefix('student')->group(function(){
    Route::get('/index', 'Backend\StudentController@index')->name('student.index');
    // Route::get('/view/{id}', 'Backend\StudentController@view')->name('student.view');
    // Route::get('/add', 'Backend\StudentController@add')->name('student.add');
    // Route::post('/store', 'Backend\StudentController@store')->name('student.store');
    // Route::get('/edit/{id}', 'Backend\StudentController@edit')->name('student.edit');
    // Route::post('/update', 'Backend\StudentController@update')->name('student.update');
    // Route::get('/delete/{id}', 'Backend\StudentController@delete')->name('student.delete');
});