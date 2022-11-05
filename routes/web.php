<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\EventRegistrationController;
use App\Http\Controllers\ProfileController;

// use Auth;

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
Route::get('logout', function (){
    auth()->logout();
    Session()->flush(); return Redirect::to('/');
})->name('logout');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/user/register', function () { return view('auth/register'); })->name('user.register');
    Route::post('/user/register', [ HomeController::class, 'userRegister' ])->name('user.register');
    Route::get('/community/register', function () { return view('auth/register'); })->name('community.register');
    Route::post('/community/register', [ HomeController::class, 'communityRegister' ])->name('community.register');
    Route::get('/register',[HomeController::class, 'redirectRegister'] )->name('redirect.register');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard',[HomeController::class, 'redirectUser'] )->name('dashboard');
});

// user routes .................................
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified','role:user'])->group(function () {
    Route::get('/home', function () {
        return view('user/pages/user-dashboard');
    })->name('user.dashboard');
    Route::get('/user/profile',[ProfileController::class, 'viewProfile'] )->name('view.profile');
    Route::get('/user/profile/edit',[ProfileController::class, 'editProfile'] )->name('edit.profile');
    Route::get('/user/profile/settings',[ProfileController::class, 'settingsProfile'] )->name('settings.profile');
    
    // Route::post('/event/edp',[EventRegistrationController::class, 'register'] )->name('submit.form.spectra');
});

// community routes................................
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified','role:community'])->group(function () {
    Route::get('/community/dashboard', function () {
        // return view('community/pages/community-dashboard');
        return view('community/pages/event-preview');
    })->name('community.dashboard');
    Route::get('/event/edp',[EventRegistrationController::class, 'communityindex'] );

    Route::get('/community/table/ep', [ CommunityController::class, 'eventParticipantsTable' ])->name('table.event.participants');
    

});

// admin routes.....................................
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified','role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');
});

// Route::get('/event/edp',[EventRegistrationController::class, 'index'] );
// Route::post('/event/edp',[EventRegistrationController::class, 'joinCommunity'] );
Route::get('/event/edp',[EventRegistrationController::class, 'userindex'] );
Route::post('/event/edp',[EventRegistrationController::class, 'register'] )->name('submit.form.spectra');

// Route::get('/google',[HomeController::class, 'redirectToGoogle'] );
// Route::get('/google/callback',[HomeController::class, 'handdleGoogleCallBack'] );


