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

// route selamat
Route::get('/selamat', function () {
    return view('selamat',['nama'=>'Kanaya Putri']);
});
Route::get('/utama', function () {
    return view('layout',[
        'nama'=>'Kanaya Putri',
        'title'=>'Selamat Datang Web Framework',
    ]);
});

// route contoh1
Route::get('/contoh1', [App\Http\Controllers\Contoh1Controller::class, 'show']);
// route contoh2
Route::get('/contoh2', [App\Http\Controllers\Contoh2Controller::class, 'show']);
// route coa
Route::get('/coa', [App\Http\Controllers\CoaController::class, 'index']);
