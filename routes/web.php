<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Dashboard\DashboardProjectController;
use App\Http\Controllers\Dashboard\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage.index');
Route::get('/projects', [ProjectController::class, 'index'])->name('homepage.project');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::prefix('user')->name('user.')->group(function () {
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::post('store', [UserController::class, 'store'])->name('store');
});

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('project')->name('project.')->group(function () {
        Route::get('', [DashboardProjectController::class, 'index'])->name('index');
        Route::get('create', [DashboardProjectController::class, 'create'])->name('create');
        Route::post('store', [DashboardProjectController::class, 'store'])->name('store');
        Route::delete('{project}', [DashboardProjectController::class, 'destroy'])->name('destroy');
    });
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
