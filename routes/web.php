<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TampilController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\PendaftarController;

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

Auth::routes();


Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');
Route::get('/daftar-form', [App\Http\Controllers\Daftar2Controller::class, 'index'])->name('daftar-form');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/read', [App\Http\Controllers\ReadController::class, 'index'])->name('read');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

use Illuminate\Support\Facades\Route;

Route::get('/tampil/{id}', [TampilController::class, 'index']);

Route::resource('kategori', KategoriController::class);

Route::resource('artikel', ArtikelController::class);

Route::resource('testimoni', TestimoniController::class);

Route::resource('pendaftar', PendaftarController::class);

