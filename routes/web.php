<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\RoomController;

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

Route::get('dashboard', [KosController::class, 'dashboard']);
Route::get('login-page', [AuthController::class, 'index'])->name('login-page');
Route::get('registration-page', [AuthController::class, 'registration'])->name('registration-page');
Route::get('detail/{id}', [KosController::class, 'getKosById'])->name('detail-kos');
Route::get('room/{id}', [RoomController::class, 'getRoom'])->name('room');
// Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login'); 
// Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register'); 
// Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::group(['middleware' => ['auth']], function() {
    Route::get('add-kos-page', [KosController::class, 'getKosAddPage'])->name('add-kos.page');
    Route::post('add-kos', [KosController::class, 'add'])->name('add-kos');
    Route::post('add-room', [KosController::class, 'addRoom'])->name('add-room');
});
Route::get('search-page', [KosController::class, 'getKosSearchPage'])->name('search.page');
Route::post('search', [KosController::class, 'getKosByFilter'])->name('search');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
