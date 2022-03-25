<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TaskController;

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



Route::resource('users', UsersController::class)->middleware('auth');
Route::get('task/{id}', [TaskController::class, 'index']);


/* Route::get('users/register', [UsersController::class,'create']); */
Auth::routes(['reset' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [UsersController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [UsersController::class, 'index'])->name('home');
});