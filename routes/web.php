<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;


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
    // return view('welcome');
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// dashboardbootstrap
Route::get('/dashboardbootstrap', function () {
    return view('dashboardbootstrap');
})->middleware(['auth'])->name('dashboardbootstrap');

// route untuk validasi login
Route::post('/validasi_login', [App\Http\Controllers\LoginController::class, 'show']);

// route selamat
Route::get('/selamat', function () {
    return view('selamat',['nama'=>'Hendro Jokondo-kondo']);
});

// route contoh1
Route::get('/contoh1', [App\Http\Controllers\Contoh1Controller::class, 'show']);
// route contoh2
Route::get('/contoh2', [App\Http\Controllers\Contoh2Controller::class, 'show']);
// route coa
Route::get('/coa', [App\Http\Controllers\CoaController::class, 'index']);

// route ke master data perusahaan
Route::resource('/perusahaan', PerusahaanController::class)->middleware(['auth']);
Route::get('/perusahaan/destroy/{id}', [App\Http\Controllers\PerusahaanController::class,'destroy'])->middleware(['auth']);
//Route::resource('/perusahaan', PerusahaanController::class)->middleware('auth');
//Route::get('/perusahaan/destroy/{id}', [PerusahaanController::class, 'destroy'])->middleware('auth');
//Route::resource('', [LoginController::class, 'login']);
Route::get('coa/tabel', [App\Http\Controllers\CoaController::class,'tabel'])->middleware(['auth']);
Route::get('coa/fetchcoa', [App\Http\Controllers\CoaController::class,'fetchcoa'])->middleware(['auth']);
Route::get('coa/fetchAll', [App\Http\Controllers\CoaController::class,'fetchAll'])->middleware(['auth']);
Route::get('coa/edit/{id}', [App\Http\Controllers\CoaController::class,'edit'])->middleware(['auth']);
Route::get('coa/destroy/{id}', [App\Http\Controllers\CoaController::class,'destroy'])->middleware(['auth']);
Route::resource('coa', App\Http\Controllers\CoaController::class)->middleware(['auth']);

// route ke master data perusahaan
Route::resource('/perusahaan', PerusahaanController::class)->middleware(['auth']);
Route::get('/perusahaan/destroy/{id}', [App\Http\Controllers\PerusahaanController::class,'destroy'])->middleware(['auth']);
require __DIR__.'/auth.php';

// route ke master data perusahaan
//Route::resource('/perusahaan', PerusahaanController::class)->middleware(['auth']);
//Route::get('/perusahaan/destroy/{id}', [App\Http\Controllers\PerusahaanController::class,'destroy'])->middleware(['auth']);