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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('utama',function(){
        return view('content/utama');
    })->name('utama');
    Route::get('pemeringkatan',function(){
        return view('content.pemeringkatan');
    })->name('pemeringkatan');
    
});
Route::get('/masuk',function(){
    return view('content.login');
})->middleware(['auth'])->name('masuk');
require __DIR__.'/auth.php';
