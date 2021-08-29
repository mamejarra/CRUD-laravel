<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::resource('students',StudentController::class);
Route::get('/inscription', function(){
    return view('inscription');
});
Route::post('/inscription', function(){
    return "Nous avons recu votre email qui est:" . request('email');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/create', function(){
    return view('create');
});
Route::get('/edit', function(){
    return view('edit');
});