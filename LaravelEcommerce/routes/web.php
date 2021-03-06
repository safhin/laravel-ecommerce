<?php

use App\Http\Controllers\Admin\Auth\AuthenticationController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware(['isAdmin:admin']);

Route::prefix('admin')->group(function () {
    Route::get('login',[AuthenticationController::class, 'showLoginForm'])->name('login');
    Route::post('authenticate',[AuthenticationController::class, 'adminAuthenticate'])->name('authenticate');
});