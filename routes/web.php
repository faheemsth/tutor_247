<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Auth;

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

// *********************************************************************************************
// *                               Guest Pages Routes
// *********************************************************************************************
//Route::get('/', function () { return view('home'); });
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/find-tutor', [FrontendController::class, 'findTutor'])->name('findTutor');
Route::get('/student-apply-steps', [FrontendController::class, 'studentApplySteps'])->name('studentApplySteps');
Route::get('/tutor-apply-steps', [FrontendController::class, 'tutorApplySteps'])->name('tutorApplySteps');
Route::get('/organization-apply-steps', [FrontendController::class, 'organizationApplySteps'])->name('organizationApplySteps');
Route::get('/prices', [FrontendController::class, 'prices'])->name('prices');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');

// *********************************************************************************************
// *                               Signup , Login in and Reset Password Routes
// *********************************************************************************************
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('showRegisterForm');
Route::post('register', [RegisterController::class,'register'])->name('register');
Route::get('/login-roles', [LoginController::class, 'loginRoles'])->name('login-roles');
Route::get('/login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);

//  Route::get('/login-1', function () { return view('pages.login'); });
//  Route::post('register', [RegisterController::class,'register']);
//  Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
//  Route::post('login', [LoginController::class,'login']);


Route::get('password/forget',  function () {
	return view('pages.forgot-password');
})->name('password.forget');
Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('auth.passwords.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');


Route::get('/email/verify', 'auth\VerificationController@show')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', 'auth\VerificationController@verify')->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', 'auth\VerificationController@resend')->name('verification.resend');

// *********************************************************************************************
// *                               Super Admin Routes
// *********************************************************************************************
Route::group(['middleware' => 'auth'], function(){
	Route::get('/logout', [LoginController::class,'logout']);

    Route::group(['middleware' => ['verified']], function() {
        Route::get('/dashboard', function () {
			return view('pages.dashboard');
		})->name('dashboard');
    });
    // Profile route
    Route::get('/profile', function () { return view('pages.profile'); });

	//only those have manage_user permission will get access
	Route::group(['middleware' => 'can:manage_user'], function(){
	Route::get('/users', [UserController::class,'index']);
	Route::get('/user/get-list', [UserController::class,'getUserList']);
		Route::get('/user/create', [UserController::class,'create']);
		Route::post('/user/store', [UserController::class,'store'])->name('store-user');
		Route::get('/user/{id}/edit', [UserController::class,'edit']);
		Route::put('/user/{id}/update', [UserController::class,'update']);
		Route::get('/user/{id}/delete', [UserController::class, 'delete']);
	});

	//only those have manage_role permission will get access
	Route::group(['middleware' => 'can:manage_role|manage_user'], function(){
		Route::get('/roles', [RolesController::class,'index']);
		Route::get('/role/get-list', [RolesController::class,'getRoleList']);
		Route::post('/role/create', [RolesController::class,'create']);
		Route::get('/role/edit/{id}', [RolesController::class,'edit']);
		Route::post('/role/update', [RolesController::class,'update']);
		Route::get('/role/delete/{id}', [RolesController::class,'delete']);
	});


	//only those have manage_permission permission will get access
	Route::group(['middleware' => 'can:manage_permission|manage_user'], function(){
		Route::get('/permission', [PermissionController::class,'index']);
		Route::get('/permission/get-list', [PermissionController::class,'getPermissionList']);
		Route::post('/permission/create', [PermissionController::class,'create']);
		Route::get('/permission/update', [PermissionController::class,'update']);
		Route::get('/permission/delete/{id}', [PermissionController::class,'delete']);
	});

	// get permissions
	Route::get('get-role-permissions-badge', [PermissionController::class,'getPermissionBadgeByRole']);

	// Basic demo routes

});





