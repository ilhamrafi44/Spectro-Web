<?php

use App\Http\Controllers\Admin\UserControler;
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
// Route::get('lang/home', [LangController::class, 'index']);
// Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

// Set Role akun
Route::get('pre-home', [GhostController::class, 'pick_role'])->name('pre_home');
Route::get('set-role/{id}', [GhostController::class, 'set_role'])->name('set_role');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    //role admin
    Route::middleware(['admin'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/home', [AdminController::class, 'index'])->name('admin_home');
            Route::get('/users', [UserControler::class, 'index'])->name('admin.list.user');
            Route::get('/users/add', [UserControler::class, 'add'])->name('admin.add.user');
            Route::post('/users/add', [UserControler::class, 'store'])->name('admin.add.users');
        });
    });

    //role employer
    Route::middleware(['employer'])->group(function () {
        Route::prefix('employer')->group(function () {
            Route::get('/home', [EmployerController::class, 'index'])->name('employer_home');
            Route::get('/profile', [EmployerController::class, 'profile'])->name('employer_profile');
            Route::post('/profile', [EmployerController::class, 'update'])->name('employer_profile_store');
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

Route::get('/home', function(){
    if (Auth::user()->role == 1) {
        return redirect()->route('user_home');
    }
    if (Auth::user()->role == 2) {
        return redirect()->route('employer_home');
    }
    if (Auth::user()->role == 3) {
        return redirect()->route('admin_home');
    }
    if (Auth::user()->role == 0) {
        return redirect()->route('pre_home');
    }
})->name('home');

Route::get('/profile', function(){
    if (Auth::user()->role == 1) {
        return redirect()->route('user_profile');
    }
    if (Auth::user()->role == 2) {
        return redirect()->route('employer_profile');
    }
    if (Auth::user()->role == 3) {
        return redirect()->route('admin_profile');
    }
    if (Auth::user()->role == 0) {
        return redirect()->route('pre_home');
    }
})->name('profile');
