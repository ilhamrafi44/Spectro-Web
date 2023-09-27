<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\GhostController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


// OAuth Google
Route::get('google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('google/call-back', [GoogleAuthController::class, 'callbackGoogle'])->name('google-callback');

// Set Bahasa
Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

// Set Role akun
Route::get('pre-home', [GhostController::class, 'pick_role'])->name('pre_home');
Route::get('set-role/{id}', [GhostController::class, 'set_role'])->name('set_role');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    //role admin
    Route::middleware(['admin'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/home', [AdminController::class, 'index'])->name('admin_home');
        });
    });

    //role employer
    Route::middleware(['employer'])->group(function () {
        Route::prefix('employer')->group(function () {
            Route::get('/home', [EmployerController::class, 'index'])->name('employer_home');
        });
    });

    //role user
    Route::middleware(['user'])->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/home', [UserController::class, 'index'])->name('user_home');
            Route::get('/profile', [UserController::class, 'profile'])->name('user_profile');
            Route::get('/settings', [UserController::class, 'settings'])->name('user_settings');
        });
    });
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
