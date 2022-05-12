<?php

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

// Auth Routes
Route::get('/', [App\Http\Controllers\UserSignInController::class, 'index'])->name('auth.login');
Route::get('/signup', [App\Http\Controllers\ParticipantSignUpController::class, 'index'])->name('auth.signup');
Route::get('/forgot', [App\Http\Controllers\PasswordResetController::class, 'passforgot'])->name('auth.forgotpassword');
Route::get('/resetpwd', [App\Http\Controllers\PasswordResetController::class, 'passreset'])->name('auth.resetpassword');

// All Dashboard
Route::get('/index', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('backend.admin.index');
Route::get('/statedash', [App\Http\Controllers\DelegatesController::class, 'delegatedash'])->name('backend.statedelegate.index');
Route::get('/athletedash', [App\Http\Controllers\DelegatesController::class, 'athletedash'])->name('backend.participant.index');

// Analysis Route
Route::get('/genanalysis', [App\Http\Controllers\AnalysisController::class, 'GenAnalysis'])->name('backend.admin.analysis');
Route::get('/stateanalysis', [App\Http\Controllers\StateAnalysisController::class, 'stateanalysis'])->name('backend.admin.stateanalysis');

// Settings Routes
Route::get('/addsports', [App\Http\Controllers\SportsController::class, 'addsports'])->name('backend.sports.addsports');
Route::get('/addsportevents', [App\Http\Controllers\SportsController::class, 'addsportsevents'])->name('backend.sports.addsportevent');

// List
Route::get('/listofdelegates', [App\Http\Controllers\DelegatesController::class, 'delegatelist'])->name('backend.participant.delegates');
Route::get('/listofathletes', [App\Http\Controllers\DelegatesController::class, 'athleteslist'])->name('backend.participant.athletes');

