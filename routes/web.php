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

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', 'TopController@index');
Route::get('/output/addition', 'OutputController@addition');
Route::get('/output/addition/answer', 'OutputController@addition_answer');
Route::get('/output/subtraction', 'OutputController@subtraction');
Route::get('/output/subtraction/answer', 'OutputController@subtraction_answer');
Route::get('/output/multiplication', 'OutputController@multiplication');
Route::get('/output/multiplication/answer', 'OutputController@multiplication_answer');
Route::get('/pdf_output/addition', 'OutputController@pdf_output_addition');
Route::get('/pdf_output/subtraction', 'OutputController@pdf_output_subtraction');
Route::get('/pdf_output/multiplication', 'OutputController@pdf_output_multiplication');
Route::get('/pdf_output/test', 'OutputController@test');
Route::get('/user/home', 'UserController@home');
Route::get('/user/settings', 'UserController@settings');
Route::post('/user/settings', 'UserController@change_settings');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
