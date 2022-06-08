<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\SearchController;

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

Route::get('dashboard', [AuthController::class, 'dashboard']);
// Route::get('login', [AuthController::class, 'index'])->name('login-page');
// Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login'); 
// Route::get('registration', [AuthController::class, 'registration'])->name('register-page');
// Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register'); 
// Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('search-page', [KosController::class, 'getKosSearchPage'])->name('search.page');
Route::post('search', [KosController::class, 'getKosByFilter'])->name('search');
Route::post('add-kos', [KosController::class, 'add'])->name('add-kos');
Route::post('add-room', [KosController::class, 'addRoom'])->name('add-room');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
