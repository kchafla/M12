<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdicioUserController;

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
Route::get('/update', function(){
    return view('edit');
})->name('update');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/prueba', function(){
    return view('prueba');
});

Route::get('/videos', function(){
    return view('videosUser');
})->name('videos');

Route::post('/updateUser', [EdicioUserController::class, 'edit']);
require __DIR__.'/auth.php';
