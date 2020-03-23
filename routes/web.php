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
Route::get('/post/addition', 'PostController@addition');
Route::get('/post/addition/answer', 'PostController@addition_answer');
Route::get('/post/subtraction', 'PostController@subtraction');
Route::get('/post/subtraction/answer', 'PostController@subtraction_answer');
Route::get('/post/multiplication', 'PostController@multiplication');
Route::get('/post/multiplication/answer', 'PostController@multiplication_answer');
Route::get('/pdf', 'PdfController@test');