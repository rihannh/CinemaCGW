<?php

use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\admin\FilmController;
use App\Http\Controllers\admin\ScheduleController;
use App\Http\Controllers\admin\StudioController;
use App\Http\Controllers\admin\TransactionAdmin;
use App\Http\Controllers\admin\TransactionAdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailScheduleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/film', [HomeController::class, 'filmPage'])->name('films');
Route::get('detail-film/{id}', [HomeController::class, 'show'])->name('detail.film');
Route::get('/detail-ticket/{id}', [DetailScheduleController::class, 'show'])->name('detail-ticket');
Route::post('/checkout/{id}', [CheckoutController::class, 'proccess'])->name('checkout.process');
Route::get('/checkout/{id}', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/checkout/confirm/{id}', [CheckoutController::class, 'success'])->name('checkout.success');
Auth::routes();

Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/', [DashController::class, 'index'])->name('dashboard');
    Route::resource('/film', FilmController::class);
    Route::resource('/studio', StudioController::class);
    Route::resource('/schedule', ScheduleController::class);
    Route::resource('/transaction', TransactionAdminController::class);
});
