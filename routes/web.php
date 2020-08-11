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
//     return view('home');
// });


// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');



Route::get('/mahasiswa', 'MahasiswaController@index');


// Employments

// Route::get('/employments', 'EmploymentsController@index');
// Route::get('/employments/create', 'EmploymentsController@create');
// Route::get('/employments/{employment}', 'EmploymentsController@show');
// Route::post('/employments', 'EmploymentsController@store');
// Route::delete('/employments/{employment}', 'EmploymentsController@destroy');
Route::get('/employments/{employment}/update', 'EmploymentsController@edit');
// Route::patch('/employments/{employment}', 'EmploymentsController@update');

Route::resource('employments', 'EmploymentsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
