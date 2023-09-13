<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyJobController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ProfileController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(MyJobController::class)->group(function(){

    Route::get('myjob', 'index')->name('myjob.index');

    Route::post('myjob', 'store')->name('myjob.store');

    Route::get('myjob/create', 'create')->name('myjob.create');

    Route::get('myjob/{myjob}', 'show')->name('myjob.show');

    Route::put('myjob/{myjob}', 'update')->name('myjob.update');

    Route::delete('myjob/{myjob}', 'destroy')->name('myjob.destroy');

    Route::get('myjob/{myjob}/edit', 'edit')->name('myjob.edit');

    Route::get('myjob/{myjob}/{user_id}/edit', 'person')->name('myjob.person');

});

Route::get('invite-people', [OtherController::class, 'invitePeople'])->name('invite-people');

Route::controller(MemberController::class)->group(function(){

    Route::get('member', 'index')->name('member.index');

    // Route::post('member', 'store')->name('member.store');

    // Route::get('member/create', 'create')->name('member.create');

    // Route::get('member/{member}', 'show')->name('member.show');

    // Route::put('member/{member}', 'update')->name('member.update');

    // Route::delete('member/{member}', 'destroy')->name('member.destroy');

    // Route::get('member/{member}/edit', 'edit')->name('member.edit');
});

Route::controller(CompanyController::class)->group(function(){

    Route::get('company', 'index')->name('company.index');

    // Route::post('company', 'store')->name('company.store');

    Route::get('company/create', 'create')->name('company.create');

    // Route::get('company/{company}', 'show')->name('company.show');

    // Route::put('company/{company}', 'update')->name('company.update');

    // Route::delete('company/{company}', 'destroy')->name('company.destroy');

    // Route::get('company/{company}/edit', 'edit')->name('company.edit');
});

Route::controller(TemplateController::class)->group(function(){

    Route::get('template', 'index')->name('template.index');

    Route::post('/template', 'store')->name('template.store');

    Route::get('template/create', 'create')->name('template.create');

    Route::post('template/{id}/copy', 'copy')->name('template.copy');

    Route::get('template/{id}', 'show')->name('template.show');

    Route::put('template/{template}', 'update')->name('template.update');

    Route::delete('template/{template}', 'destroy')->name('template.destroy');

    Route::get('template/{template}/edit', 'edit')->name('template.edit');
});

Route::controller(ProfileController::class)->group(function(){

    Route::get('profile', 'index')->name('profile.index');

    // Route::post('profile', 'store')->name('profile.store');

    // Route::get('profile/create', 'create')->name('profile.create');

    // Route::get('profile/{profile}', 'show')->name('profile.show');

    Route::put('profile', 'update')->name('profile.update');

    // Route::delete('profile/{profile}', 'destroy')->name('profile.destroy');

    // Route::get('profile/{profile}/edit', 'edit')->name('profile.edit');
});

Route::controller(UserController::class)->group(function(){

    Route::get('user', 'index')->name('user.index');

    Route::post('user', 'store')->name('user.store');

    // Route::get('user/create', 'create')->name('user.create');

    // Route::get('user/{user}', 'show')->name('user.show');

    // Route::put('user/{user}', 'update')->name('user.update');

    // Route::delete('user/{user}', 'destroy')->name('user.destroy');

    // Route::get('user/{user}/edit', 'edit')->name('user.edit');
});

Route::get('getJobList', [OtherController::class, 'getJobList'])->name('getJobList');
Route::get('getJobDetail', [OtherController::class, 'getJobDetail'])->name('getJobDetail');
Route::get('contact', [OtherController::class, 'contact'])->name('contact');

Route::get('test', [OtherController::class, 'test'])->name('test');
