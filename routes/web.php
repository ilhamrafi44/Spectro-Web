<?php

use App\Http\Controllers\Admin\UserControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Employer\JobsCategoryController;
use App\Http\Controllers\Employer\JobsController;
use App\Http\Controllers\Employer\JobsIndustryController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\GhostController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\UserController;
use App\Models\Jobs;
use App\Models\JobsCategory;
use Yajra\DataTables\Services\DataTable;

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
    $category = JobsCategory::all();
    $job = Jobs::all();
    return view('welcome', [
        'page_name' => "Landing Page",
        'category' => $category,
        'data_job' => $job
    ]);
});

Route::get('/register/candidate', function () {
    return view('auth.candidate');
})->name('register.candidate');

Route::get('/register/employer', function () {
    return view('auth.employer');
})->name('register.employer');

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

            // user
            Route::get('/users', [UserControler::class, 'index'])->name('admin.list.user');
            Route::get('/users/add', [UserControler::class, 'add'])->name('admin.add.user');
            Route::post('/users/add', [UserControler::class, 'store'])->name('admin.add.users');

            //jobs
            Route::get('/jobs', [JobsController::class, 'index'])->name('employer.jobs');
            Route::get('/jobs/category', [JobsCategoryController::class, 'index'])->name('admin.jobs.category');
            Route::post('/jobs/category', [JobsCategoryController::class, 'store'])->name('admin.jobs.category.add');
            Route::get('/jobs/category/{id}', [JobsCategoryController::class, 'destroy'])->name('admin.jobs.category.delete');

            Route::get('/jobs/industry', [JobsIndustryController::class, 'index'])->name('admin.jobs.industry');
            Route::post('/jobs/industry', [JobsIndustryController::class, 'store'])->name('admin.jobs.industry.add');
            Route::get('/jobs/industry/{id}', [JobsIndustryController::class, 'destroy'])->name('admin.jobs.industry.delete');
        });
    });

    //role employer
    Route::middleware(['employer'])->group(function () {
        Route::prefix('employer')->group(function () {
            Route::get('/home', [EmployerController::class, 'index'])->name('employer_home');

            //profile
            Route::get('/profile', [EmployerController::class, 'profile'])->name('employer_profile');
            Route::post('/profile', [EmployerController::class, 'update'])->name('employer_profile_store');

            // sosmed
            Route::post('/sosmed/add', [SocialMediaController::class, 'sosmed_add'])->name('employer.sosmed.add');
            Route::post('/sosmed/update', [SocialMediaController::class, 'sosmed_update'])->name('employer.sosmed.update');
            Route::get('/sosmed/delete/{id}', [SocialMediaController::class, 'sosmed_delete'])->name('employer.sosmed.delete');

            // karyawan
            Route::post('/karyawan/add', [KaryawanController::class, 'karyawan_add'])->name('employer.karyawan.add');
            Route::post('/karyawan/update', [KaryawanController::class, 'karyawan_update'])->name('employer.karyawan.update');
            Route::get('/karyawan/delete/{id}', [KaryawanController::class, 'karyawan_delete'])->name('employer.karyawan.delete');

            //job controller
            Route::get('/jobs', [JobsController::class, 'index'])->name('employer.jobs');
            Route::get('/jobs/add', [JobsController::class, 'add'])->name('employer.jobs.add');
            Route::post('/jobs/add', [JobsController::class, 'store'])->name('employer.jobs.add');


            Route::get('/jobs/category', [JobsCategoryController::class, 'index'])->name('employer.jobs.category');
            Route::post('/jobs/category', [JobsCategoryController::class, 'store'])->name('employer.jobs.category.add');
            Route::post('/jobs/category/update', [JobsCategoryController::class, 'update'])->name('employer.jobs.category.update');
            Route::get('/jobs/category/{id}', [JobsCategoryController::class, 'destroy'])->name('employer.jobs.category.delete');

            Route::get('/jobs/industry', [JobsIndustryController::class, 'index'])->name('employer.jobs.industry');
            Route::post('/jobs/industry', [JobsIndustryController::class, 'store'])->name('employer.jobs.industry.add');
            Route::post('/jobs/industry/update', [JobsIndustryController::class, 'update'])->name('employer.jobs.industry.update');
            Route::get('/jobs/industry/{id}', [JobsIndustryController::class, 'destroy'])->name('employer.jobs.industry.delete');
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

Route::get('/landing', [HomeController::class, 'index'])->name('landing');

Route::get('/home', function () {
    if (Auth::user()) {
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
    } else {
        return redirect('/');
    }
})->name('home');

Route::get('/profile', function () {
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

Route::get('/employer/detail/{id}', [EmployerController::class, 'detail'])->name('detai.employer');
