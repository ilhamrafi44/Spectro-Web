<?php

use App\Http\Controllers\Admin\UserControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Application\ApplicationController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Chat\ConversationsController;
use App\Http\Controllers\Employer\JobsCareerLevelController;
use App\Http\Controllers\Employer\JobsCategoryController;
use App\Http\Controllers\Employer\JobsController;
use App\Http\Controllers\Employer\JobsExperienceController;
use App\Http\Controllers\Employer\JobsIndustryController;
use App\Http\Controllers\Employer\JobsQualificationController;
use App\Http\Controllers\Employer\JobsTypeController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\GhostController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PengalamanKerjaController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SavedJobsController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SswFlowMasterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserResumeController;
use App\Http\Controllers\LoginControllerAjax;
use App\Http\Controllers\Chat\MessagesController;
use App\Http\Controllers\RegisterControllerAjax;
use App\Http\Controllers\WebsiteController;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Models\JobsIndustry;
use App\Models\Website;
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
    $industry = JobsIndustry::all();
    $show_category = JobsCategory::limit(5)->get();
    $location = Jobs::distinct()->get(['location_id']);
    $job = Jobs::limit(5)->get();
    return view('welcome', [
        'page_name' => "Landing Page",
        'category' => $category,
        'industry' => $industry,
        'location' => $location,
        'data_job' => $job,
        'show_category' => $show_category
    ]);
});

Route::post('/login/ajaxs', [LoginControllerAjax::class, 'login'])->name('login.ajax');
Route::post('/register/ajaxs', [RegisterControllerAjax::class, 'register'])->name('register.ajax');
Route::post('/verify/ajaxs', [LoginControllerAjax::class, 'sendEmailVerification'])->name('verify.ajax');

Route::get('/about', function () {
    return view('page.about', [
        'page_name' => "About Us",
        'data' => Website::first()
    ]);
})->name('page.about');

Route::get('/contact_us', function () {
    return view('page.contact', [
        'page_name' => "About Us",
        'data' => Website::first()
    ]);
})->name('page.contact');

Route::post('/contact-store', [ContactUsController::class, 'store'])->name('contact.store');

Route::prefix('blog')->group(function () {
    Route::get('/', [JobsController::class, 'index'])->name('blog.index');
    Route::get('/detail/{id}', [JobsController::class, 'detail'])->name('job.detail');
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

Route::post('save-job', [SavedJobsController::class, 'store'])->name('jobs.save');
Route::post('delete-job', [SavedJobsController::class, 'delete'])->name('jobs.delete');

Route::post('save-following', [FollowingController::class, 'store'])->name('following.save');
Route::post('delete-following', [FollowingController::class, 'delete'])->name('following.delete');

Auth::routes(['verify' => true]);

// private chat

// Job Route
Route::prefix('job')->group(function () {
    Route::get('/', [JobsController::class, 'index'])->name('job.index');
    Route::get('/detail/{id}', [JobsController::class, 'detail'])->name('job.detail');
});

Route::prefix('list')->group(function () {
    Route::get('/candidate', [UserController::class, 'candidate'])->name('candidate.list');
    Route::get('/employer', [UserController::class, 'employer'])->name('employer.list');
});

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/conversations', [ConversationsController::class, 'index'])->name('conversations.index');
    Route::get('/conversations/delete/{id}', [ConversationsController::class, 'delete'])->name('conversations.delete');
    Route::get('/conversations/create/{target}', [ConversationsController::class, 'create'])->name('conversations.create');
    Route::get('/conversations/{conversation_id}/messages', [MessagesController::class, 'index'])->name('messages.index');
    Route::post('/conversations/{conversation_id}/messages', [MessagesController::class, 'store'])->name('messages.store');


    Route::post('/rating/add', [RatingController::class, 'store'])->name('rating.store');

    Route::get('/password/resetsss', [UserController::class, 'reset_index'])->name('reset.index');
    Route::post('/password/resetss', [UserController::class, 'reset_update'])->name('reset.update');

    Route::get('/account/delete', [UserController::class, 'hapus_akun'])->name('hapus.akun');

    // download & delete
    Route::get('ssw-flow/download/{id}/{name}', [SswFlowMasterController::class, 'download'])->name('ssw_download');
    Route::get('ssw-flow/delete/{id}/{name}', [SswFlowMasterController::class, 'destroy'])->name('ssw_delete');

    //role admin
    Route::middleware(['admin'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/home', [AdminController::class, 'index'])->name('admin_home');
            Route::get('/contact_us', [ContactUsController::class, 'index'])->name('admin.contact.index');
            Route::get('/web', [WebsiteController::class, 'index'])->name('admin.web');
            Route::post('/web/update', [WebsiteController::class, 'update'])->name('admin.web.update');

            Route::get('/conversations', [ConversationsController::class, 'admin'])->name('conversations.admin');
            Route::get('/conversations/{conversation_id}/messages', [MessagesController::class, 'admin'])->name('messages.admin');

            // Export
            Route::get('/users/export/', [UserController::class, 'export'])->name('user.export');
            Route::get('/jobs/export/', [JobsController::class, 'export'])->name('jobs.export');


            // user
            Route::get('/users', [UserControler::class, 'index'])->name('admin.list.user');
            Route::get('/users/add', [UserControler::class, 'add'])->name('admin.add.user');
            Route::post('/users/add', [UserControler::class, 'store'])->name('admin.add.users');
            Route::post('/users/update', [UserControler::class, 'update'])->name('admin.users.update');
            Route::get('/users/delete/{id}', [UserControler::class, 'delete'])->name('admin.users.delete');

            Route::get('/jobs', [JobsController::class, 'admin'])->name('admin.jobs');
            Route::get('/jobs/add', [JobsController::class, 'ShowEmployer'])->name('admin.jobs.add');
            Route::get('/jobs/add/detail', [JobsController::class, 'AdminAdd'])->name('admin.jobs.index.add');
            Route::post('/jobs/add', [JobsController::class, 'store'])->name('admin.jobs.add');

            Route::get('/jobs/update/{id}', [JobsController::class, 'Adminupdate'])->name('admin.jobs.update');
            Route::post('/jobs/action/update', [JobsController::class, 'Adminupdates'])->name('admin.jobs.update.post');

            Route::resource('jobs/category', JobsCategoryController::class, [
                'names' => [
                    'index' => 'admin.jobs.category',
                    'store' => 'admin.jobs.category.add',
                    'update' => 'admin.jobs.category.update',
                ],
            ]);

            Route::get('/jobs/category/{id}', [JobsCategoryController::class, 'destroy'])->name('admin.jobs.category.delete');

            Route::get('/jobs/industry', [JobsIndustryController::class, 'index'])->name('admin.jobs.industry');
            Route::post('/jobs/industry', [JobsIndustryController::class, 'store'])->name('admin.jobs.industry.add');
            Route::post('/jobs/industry/update', [JobsIndustryController::class, 'update'])->name('admin.jobs.industry.update');
            Route::get('/jobs/industry/{id}', [JobsIndustryController::class, 'destroy'])->name('admin.jobs.industry.delete');

            Route::get('/jobs/type', [JobsTypeController::class, 'index'])->name('admin.master.jobs.type');
            Route::post('/jobs/type', [JobsTypeController::class, 'store'])->name('admin.master.jobs.type.add');
            Route::post('/jobs/type/update', [JobsTypeController::class, 'update'])->name('admin.master.jobs.type.update');
            Route::get('/jobs/type/{id}', [JobsTypeController::class, 'destroy'])->name('admin.master.jobs.type.delete');

            Route::get('/jobs/experience', [JobsExperienceController::class, 'index'])->name('admin.master.jobs.experience');
            Route::post('/jobs/experience', [JobsExperienceController::class, 'store'])->name('admin.master.jobs.experience.add');
            Route::post('/jobs/experience/update', [JobsExperienceController::class, 'update'])->name('admin.master.jobs.experience.update');
            Route::get('/jobs/experience/{id}', [JobsExperienceController::class, 'destroy'])->name('admin.master.jobs.experience.delete');

            Route::get('/jobs/career', [JobsCareerLevelController::class, 'index'])->name('admin.master.jobs.career');
            Route::post('/jobs/career', [JobsCareerLevelController::class, 'store'])->name('admin.master.jobs.career.add');
            Route::post('/jobs/career/update', [JobsCareerLevelController::class, 'update'])->name('admin.master.jobs.career.update');
            Route::get('/jobs/career/{id}', [JobsCareerLevelController::class, 'destroy'])->name('admin.master.jobs.career.delete');

            Route::get('/jobs/qualification', [JobsQualificationController::class, 'index'])->name('admin.master.jobs.qualification');
            Route::post('/jobs/qualification', [JobsQualificationController::class, 'store'])->name('admin.master.jobs.qualification.add');
            Route::post('/jobs/qualification/update', [JobsQualificationController::class, 'update'])->name('admin.master.jobs.qualification.update');
            Route::get('/jobs/qualification/{id}', [JobsQualificationController::class, 'destroy'])->name('admin.master.jobs.qualification.delete');

            Route::get('/app', [ApplicationController::class, 'admin'])->name('admin.app');
            Route::get('/app/rejects/{id}', [ApplicationController::class, 'rejects'])->name('jobs.reject');
            Route::get('/app/approves/{id}', [ApplicationController::class, 'approves'])->name('jobs.approve');

            Route::get('ssw-flow', [SswFlowMasterController::class, 'admin'])->name('admin.ssw.index');
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
            Route::get('/jobs', [JobsController::class, 'myjob'])->name('employer.jobs');
            Route::get('/jobs/add', [JobsController::class, 'add'])->name('employer.jobs.add');
            Route::post('/jobs/add', [JobsController::class, 'store'])->name('employer.jobs.add');

            Route::get('/jobs/update/{id}', [JobsController::class, 'update'])->name('employer.jobs.update');
            Route::post('/jobs/action/update', [JobsController::class, 'updates'])->name('employer.jobs.update.post');

            //app controller
            Route::get('/app', [ApplicationController::class, 'employer'])->name('employer.app');
            Route::get('/app/rejects/{id}', [ApplicationController::class, 'rejects'])->name('jobs.reject');
            Route::get('/app/approves/{id}', [ApplicationController::class, 'approves'])->name('jobs.approve');

            Route::get('/following', [FollowingController::class, 'employer_index'])->name('employer.following.saved');
            Route::get('/following/destroy/{id}', [FollowingController::class, 'destroy'])->name('following.saved.destroy');

            Route::get('ssw-flow', [SswFlowMasterController::class, 'employer_index'])->name('employer.ssw.index');
            Route::get('ssw-flow/detail/{id}', [SswFlowMasterController::class, 'detail'])->name('employer.ssw.detail');
        });
    });

    //role user
    Route::middleware(['user'])->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/home', [UserController::class, 'index'])->name('user_home');
            Route::get('/profile', [UserController::class, 'profile'])->name('user_profile');
            Route::post('/profile/update', [UserController::class, 'update'])->name('user.profile.update');
            Route::get('/settings', [UserController::class, 'settings'])->name('user_settings');
            Route::get('/resume', [UserResumeController::class, 'index'])->name('user.resume');
            Route::post('/resume/update', [UserResumeController::class, 'update'])->name('user.resume.update');
            Route::get('/resume/reset', [UserResumeController::class, 'reset'])->name('user.resume.reset');

            // job apply
            Route::post('/app/store', [ApplicationController::class, 'apply'])->name('jobs.apply');
            Route::get('/app', [ApplicationController::class, 'index'])->name('jobs.index');
            Route::get('/app/cancelss/{id}', [ApplicationController::class, 'cancelss'])->name('jobs.cancel');
            Route::get('/app/delete', [ApplicationController::class, 'destroy'])->name('jobs.destroy');

            Route::post('/sosmed/add', [SocialMediaController::class, 'sosmed_add'])->name('user.sosmed.add');
            Route::post('/sosmed/update', [SocialMediaController::class, 'sosmed_update'])->name('user.sosmed.update');
            Route::get('/sosmed/delete/{id}', [SocialMediaController::class, 'sosmed_delete'])->name('user.sosmed.delete');

            // pengalaman kerja
            Route::post('/pengalaman/add', [PengalamanKerjaController::class, 'add'])->name('user.pengalaman.add');
            Route::post('/pengalaman/update', [PengalamanKerjaController::class, 'update'])->name('user.pengalaman.update');
            Route::get('/pengalaman/delete/{id}', [PengalamanKerjaController::class, 'delete'])->name('user.pengalaman.delete');

            //saved jobs
            Route::get('/jobs-saved', [SavedJobsController::class, 'index'])->name('jobs.saved');
            Route::get('/jobs-saved/destroy/{id}', [SavedJobsController::class, 'destroy'])->name('jobs.saved.destroy');

            Route::get('/following', [FollowingController::class, 'index'])->name('following.saved');
            Route::get('/following/destroy/{id}', [FollowingController::class, 'destroy'])->name('following.saved.destroy');

            Route::get('ssw-flow', [SswFlowMasterController::class, 'index'])->name('ssw.index');
            Route::get('ssw-flow/detail/{id}', [SswFlowMasterController::class, 'detail'])->name('ssw.detail');
            Route::post('ssw-flow/post', [SswFlowMasterController::class, 'fileSsw'])->name('ssw.file');
            Route::post('ssw-flow/check', [SswFlowMasterController::class, 'checkSsw'])->name('ssw.check');
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
Route::get('/candidate/detail/{id}', [UserController::class, 'detail'])->name('detai.candidate');
