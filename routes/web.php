<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/branding', [FrontController::class,'branding'])->name('branding');
Route::get('/desarrollo', [FrontController::class,'desarrollo'])->name('desarrollo');
Route::get('/marketing', [FrontController::class,'marketing'])->name('marketing');
Route::get('/contacto', [FrontController::class,'contacto'])->name('contacto');
Route::resource('admin/contactos',ContactoController::class)->middleware('auth')->names('contactos');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
